let table;

let focusTextToEnd = (element) => {
    var v = element.value;
    element.focus();
    element.value = '';
    element.value = v;
}

let editInLine = (element, callback) => {
    if (!element.querySelector('input')) {
        var t = element.textContent, o = t,
            $input = document.createElement('input');

        $input.setAttribute('class', 'editInLine');
        $input.setAttribute('value', t);
        element.innerHTML = '';
        element.appendChild($input);

        setTimeout(function () { focusTextToEnd($input) }, 100);

        $input.addEventListener('keyup', function (event) {
            var keycode = event.keyCode || event.which;

            var v = this.value.trim();
            if (keycode === 13) {
                if (callback && t !== v) {
                    t = v; element.textContent = v;
                    callback(element, o, v);
                } else {
                    element.textContent = v;
                }
            }
        });

        $input.addEventListener('blur', function (_) {
            this.disabled = true;
            var v = this.value.trim();

            element.textContent = v;

            if (callback && t !== v)
                callback(element, o, v);
        });
    }
}

let update = (element, value) => {
    let columns = table.settings().init().columns;
    let colIndex = table.cell(element).index().column;
    let id = table.row(element).data().id;
    let column = columns[colIndex].data;

    $.post('processar.php', {
        action: 'update',
        column,
        value,
        id
    }, data => {if (data.message) alert(data.message)});
}

$(document).ready(function () {
    table = $('#lista').DataTable({
        columns: [
            { data: 'nome' },
            { data: 'documento' },
            { data: 'cep' },
            { data: 'endereco' },
            { data: 'bairro' },
            { data: 'cidade' },
            { data: 'uf' },
            { data: 'telefone' },
            { data: 'email' },
            { data: 'ativo' },
        ],
        rowCallback: ( row, data, displayNum, displayIndex, dataIndex ) => {
            // data.ativo = 'no'
        },
        createdRow: function( row, data, dataIndex ) {
            let checkbox = $('<input/>', {type: 'checkbox'}).prop('checked', data.ativo);

            checkbox.on('click', e => update(e.target.parentElement, e.target.checked));

            $(row).data('id', data.id);
            $('td:last', row).html(checkbox);
        },
        drawCallback: _ => {
            $('td').dblclick(e => editInLine(e.target, (element, oldValue, newValue) => {
                update(element, newValue)
            }));
        }
    });

    $.post('processar.php', {action:'getAll'}, data => table.rows.add(data).draw());
});