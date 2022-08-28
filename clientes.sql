-- Table: public.clientes

-- DROP TABLE IF EXISTS public.clientes;

CREATE TABLE IF NOT EXISTS public.clientes
(
    id integer NOT NULL DEFAULT nextval('clientes_id_seq'::regclass),
    nome character varying(40) COLLATE pg_catalog."default" NOT NULL,
    documento character varying(14) COLLATE pg_catalog."default" NOT NULL,
    cep character varying(10) COLLATE pg_catalog."default" NOT NULL,
    endereco character varying(100) COLLATE pg_catalog."default" NOT NULL,
    bairro character varying(50) COLLATE pg_catalog."default" NOT NULL,
    cidade character varying(45) COLLATE pg_catalog."default" NOT NULL,
    uf character varying(2) COLLATE pg_catalog."default" NOT NULL,
    telefone character(20) COLLATE pg_catalog."default" NOT NULL,
    email character varying(50) COLLATE pg_catalog."default" NOT NULL,
    ativo boolean NOT NULL DEFAULT true,
    CONSTRAINT clientes_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.clientes
    OWNER to postgres;