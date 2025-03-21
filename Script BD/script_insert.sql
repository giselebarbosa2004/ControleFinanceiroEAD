-- COMANDO PARA INSERIR 
-- insert into nome_da_tabela (colunas) values (valores)

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Ana Maria', 'ana@gmail.com', 'senha123', '2021-02-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carlos Junior', 'carlos@gmail.com', '44510', '2021-02-25'); 

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Alexandre Junior', 'alexandre@gmail.com', '3323', '2021-02-25'); 


insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentação', 1)

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Viagens', 2)

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Colchão', '4399924455', 'Rua dos Colchões', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Comer Bem', '5599983456', 'Rua dos Restaurantes', 2);


insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1122', '112233', 4500.20, 1);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '4433', '335566', 5678.89, 2); 


insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-01-10', 45, null, 1, 1, 2, 1);

insert into tb_movimento
 (tipo_movimento
, data_movimento
, valor_movimento
, obs_movimento
, id_empresa
, id_conta
, id_categoria
, id_usuario)
values
 (2 /* tipo_movimento */
, '2021-02-15'
, 34.12
, 'Pagamento adiantado'
, 2
, 2
, 2
, 2);

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carolina Silva', 'cah@gmail.com', '3323', '2021-02-25'); 

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Cristian Silva', 'cris@gmail.com', '3323', '2021-02-25'); 

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Estudos', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Esportes', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Pizzaria', '5599983457', 'Rua das Massas', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Auto Center', '5599983458', 'Rua dos Carros', 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Itau', '6733', '565566', 6700.00, 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa', '8933', '344566', 8000.00, 5);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-01-10', 60.12, 'Muito Bom', 3, 3, 3, 4);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2021-02-18', 66.42, null, 4, 4, 7, 5);
