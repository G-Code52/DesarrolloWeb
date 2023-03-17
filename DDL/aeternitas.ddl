CREATE TABLE at_clientes (
    id              INT(4) PRIMARY KEY AUTO_INCREMENT,
    nombre          VARCHAR(20) NOT NULL,
    apellidopat     VARCHAR(20) NOT NULL,
    apellidomat     VARCHAR(20) NOT NULL,
    fechanacimiento DATE NOT NULL,
    correo          VARCHAR(30) NOT NULL,
    telefono        VARCHAR(10) NOT NULL,
    calle           VARCHAR(30) NOT NULL,
    numexterior     VARCHAR(5) NOT NULL,
    numinterior     VARCHAR(5),
    colonia         VARCHAR(30) NOT NULL,
    codigopostal    VARCHAR(5) NOT NULL,
    municipio       VARCHAR(30) NOT NULL,
    telefonocasa    VARCHAR(10),
    telefonotrabajo VARCHAR(10),
    ine             VARCHAR(20),
    rfc             VARCHAR(20),
    tipo            VARCHAR(10) NOT NULL,
    parentesco      VARCHAR(10),
    at_cte_id          INT(4) NOT NULL
);

CREATE TABLE at_contratos (
    id          INT(5) PRIMARY KEY AUTO_INCREMENT,
    preciofinal INT(7) NOT NULL,
    tipopago    VARCHAR(20) NOT NULL,
    fechafirma  DATE NOT NULL,
    at_cte_id      INT(4) NOT NULL,
    at_epo_id      INT(5) NOT NULL
);

CREATE TABLE at_empleados (
    id                INT(5) PRIMARY KEY AUTO_INCREMENT,
    nombre            VARCHAR(20) NOT NULL,
    apellido          VARCHAR(20) NOT NULL,
    curp              VARCHAR(20) NOT NULL,
    calle             VARCHAR(20) NOT NULL,
    numexterior       VARCHAR(10),
    numinterior       VARCHAR(10),
    colonia           VARCHAR(20) NOT NULL,
    codigopostal      VARCHAR(20) NOT NULL,
    telefono          VARCHAR(10) NOT NULL,
    correo            VARCHAR(30) NOT NULL,
    tituloacademico   VARCHAR(40),
    area              VARCHAR(20) NOT NULL,
    comision          INT(2),
    fechacontratacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    at_epo_id            INT(5) NOT NULL
);

CREATE TABLE at_facturas (
    numfactura  INT(5) PRIMARY KEY AUTO_INCREMENT,
    rfc         VARCHAR(20) NOT NULL,
    direccion   VARCHAR(40) NOT NULL,
    fecha       DATE NOT NULL,
    descripcion VARCHAR(40) NOT NULL,
    at_cto_id      INT(5) NOT NULL,
    at_cto_cte_id  INT(4),
    at_cto_epo_id  INT(5)
);

CREATE UNIQUE INDEX at_fta_idx ON
    at_facturas (
        at_cto_id
    ASC,
        at_cto_cte_id
    ASC,
        at_cto_epo_id
    ASC );

CREATE TABLE at_proveedores (
    id            INT(5) PRIMARY KEY AUTO_INCREMENT,
    tipoinsumo    VARCHAR(20) NOT NULL,
    nombreempresa VARCHAR(40) NOT NULL,
    telefono      VARCHAR(10) NOT NULL,
    direccion     VARCHAR(40),
    nombredueno   VARCHAR(30)
);

CREATE TABLE at_serviciocontratos (
    fechauso               DATE NOT NULL,
    folioactadefuncion     VARCHAR(20) NOT NULL,
    foliocertificadomedico VARCHAR(20) NOT NULL,
    at_svo_id                 INT(5) NOT NULL,
    at_cto_id                 INT(5) NOT NULL,
    at_cto_epo_id             INT(5) NOT NULL
);

ALTER TABLE at_serviciocontratos
    ADD CONSTRAINT sco_pk PRIMARY KEY ( at_svo_id,
                                        at_cto_id);

CREATE TABLE at_servicioproveedores (
    producto VARCHAR(30) NOT NULL,
    fecha    DATE NOT NULL,
    at_pvr_id   INT(5) NOT NULL,
    at_svo_id   INT(5) NOT NULL
);

ALTER TABLE at_servicioproveedores ADD CONSTRAINT at_spr_pk PRIMARY KEY ( at_pvr_id,
                                                                    at_svo_id );

CREATE TABLE at_servicios (
    id             INT(5) PRIMARY KEY AUTO_INCREMENT,
    tipo           VARCHAR(10) NOT NULL,
    preciooriginal INT(7) NOT NULL,
    descuento      INT(2)
);

ALTER TABLE at_clientes
    ADD CONSTRAINT at_cte_cte_fk FOREIGN KEY ( at_cte_id )
        REFERENCES at_clientes ( id );

ALTER TABLE at_contratos
    ADD CONSTRAINT at_cto_cte_fk FOREIGN KEY ( at_cte_id )
        REFERENCES at_clientes ( id );

ALTER TABLE at_contratos
    ADD CONSTRAINT at_cto_epo_fk FOREIGN KEY ( at_epo_id )
        REFERENCES at_empleados ( id );

ALTER TABLE at_empleados
    ADD CONSTRAINT at_epo_epo_fk FOREIGN KEY ( at_epo_id )
        REFERENCES at_empleados ( id );

ALTER TABLE at_facturas
    ADD CONSTRAINT at_fta_cto_fk FOREIGN KEY ( at_cto_id)
        REFERENCES at_contratos ( id);

ALTER TABLE at_serviciocontratos
    ADD CONSTRAINT at_sco_cto_fk FOREIGN KEY ( at_cto_id )
        REFERENCES at_contratos ( id );

ALTER TABLE at_serviciocontratos
    ADD CONSTRAINT at_sco_svo_fk FOREIGN KEY ( at_svo_id )
        REFERENCES at_servicios ( id );

ALTER TABLE at_servicioproveedores
    ADD CONSTRAINT at_spr_pvr_fk FOREIGN KEY ( at_pvr_id )
        REFERENCES at_proveedores ( id );

ALTER TABLE at_servicioproveedores
    ADD CONSTRAINT at_spr_svo_fk FOREIGN KEY ( at_svo_id )
        REFERENCES at_servicios ( id );