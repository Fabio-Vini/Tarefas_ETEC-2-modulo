create database bd_investidor;
use bd_investidor;


CREATE TABLE `tb_informacoesBancarias` (
  `cd_informacoes` INT NOT NULL,
  `ds_titular` VARCHAR(75) NOT NULL,
  `nm_nome` INT NOT NULL,
  `nr_numerobanco` INT NOT NULL,
  `ds_contacorrente` VARCHAR(75) NULL,
  PRIMARY KEY (`cd_informacoes`));
  
  
CREATE TABLE `tb_composicaoPatrimonial` (
  `cd_composicaoPatrimonial` INT NOT NULL,
  `ds_disponibilidade` VARCHAR(150) NULL,
  `ds_imoves` VARCHAR(150) NULL,
  `ds_veiculos` VARCHAR(150) NULL,
  `ds_outrosbensevalroes` VARCHAR(150) NULL,
  `ds_faturamento` VARCHAR(150) NULL,
  `ds_alvo total` VARCHAR(150) NULL,
  `vl_aproxmado` DECIMAL(10,2) NULL,
  `ds_quantidade_imovel` INT NULL,
  `ds_quantidade_veiculos` INT NULL,
  PRIMARY KEY (`cd_composicaoPatrimonial`));


CREATE TABLE`tb_clienteDeclara` (
  `cd_clienteDeclara` INT NOT NULL,
  `ds_pessoapoliticamente` ENUM('SIM', 'NÃO') NOT NULL,
  `ds_local` VARCHAR(75) NULL,
  `dt_data` DATETIME NULL,
  `ds_nomeassinatura` VARCHAR(75) NOT NULL,
  `tb_informacoesBancarias_cd_informacoes` INT NOT NULL,
  `tb_composicaoPatrimonial_cd_composicaoPatrimonial` INT NOT NULL,
  PRIMARY KEY (`cd_clienteDeclara`, `tb_informacoesBancarias_cd_informacoes`, `tb_composicaoPatrimonial_cd_composicaoPatrimonial`),
    FOREIGN KEY (`tb_informacoesBancarias_cd_informacoes`)
    REFERENCES `mydb`.`tb_informacoesBancarias` (`cd_informacoes`),
  CONSTRAINT `fk_tb_clienteDeclara_tb_composicaoPatrimonial1`
    FOREIGN KEY (`tb_composicaoPatrimonial_cd_composicaoPatrimonial`)
    REFERENCES `mydb`.`tb_composicaoPatrimonial` (`cd_composicaoPatrimonial`));


CREATE TABLE `tb_cadastroCliente` (
  `cd_cadastroCliente` INT NOT NULL,
  `cd_cnpj` INT NOT NULL,
  `nm_razao_social` VARCHAR(215) NOT NULL,
  `ds_inscricao_estadual` VARCHAR(45) NULL,
  `cd_nire` VARCHAR(45) NULL,
  `tb_clientecol` INT(11) NULL,
  `ds_endereco` VARCHAR(100) NULL,
  `nr_numero` INT(5) NULL,
  `ds_complemento` VARCHAR(200) NULL,
  `ds_bairro` VARCHAR(200) NULL,
  `nm_cidade` VARCHAR(20) NULL,
  `cd_uf` VARCHAR(45) NULL,
  `cd_cep` INT(8) NULL,
  `tel_fone` INT(11) NULL,
  `ds_praças_filiais` VARCHAR(200) NULL,
  `ds_email` VARCHAR(40) NULL,
  `dt_data_fundacao` DATE NULL,
  `nr_numero_empregados` INT(5) NULL,
  `ds_ramo_atividade` VARCHAR(10) NULL,
  `tb_clienteDeclara_cd_clienteDeclara` INT NOT NULL,
  PRIMARY KEY (`cd_cadastroCliente`),
  CONSTRAINT `fk_tb_cadastroCliente_tb_clienteDeclara1`
    FOREIGN KEY (`tb_clienteDeclara_cd_clienteDeclara`)
    REFERENCES `mydb`.`tb_clienteDeclara` (`cd_clienteDeclara`));



CREATE TABLE`tb_contatos` (
  `cd_contatos` INT NOT NULL,
  `nm_nome` INT NOT NULL,
  `nr_tel` INT(11) NOT NULL,
  `ds_endereco` VARCHAR(100) NOT NULL,
  `nr_numero` INT(5) NOT NULL,
  `ds_complemento` VARCHAR(100) NOT NULL,
  `ds_bairro` VARCHAR(45) NOT NULL,
  `nm_cidade` VARCHAR(30) NOT NULL,
  `cd_uf` VARCHAR(45) NOT NULL,
  `cd_cep` INT(8) NOT NULL,
  `tb_clienteDeclara_cd_clienteDeclara` INT NOT NULL,
  PRIMARY KEY (`cd_contatos`),
  CONSTRAINT `fk_tb_contatos_tb_clienteDeclara1`
    FOREIGN KEY (`tb_clienteDeclara_cd_clienteDeclara`)
    REFERENCES `mydb`.`tb_clienteDeclara` (`cd_clienteDeclara`));



CREATE TABLE `tb_responsaveisProcuradores` (
  `cd_responsaveis` INT NOT NULL,
  `cd_cpf` INT NOT NULL,
  `nm_nome` VARCHAR(200) NOT NULL,
  `ds_cargo` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`cd_responsaveis`));



CREATE TABLE `tb_diretorSociosGerentes` (
  `cd_diretor` INT NOT NULL,
  `cd_cpf` INT NULL,
  `nm_nome` VARCHAR(200) NOT NULL,
  `ds_mandato` VARCHAR(50) NOT NULL,
  `tb_diretorcol` VARCHAR(45) NULL,
  PRIMARY KEY (`cd_diretor`));



CREATE TABLE`tb_usoDaInstituicao` (
  `cd_usodainstituicao` INT NOT NULL,
  `ds_local` VARCHAR(75) NULL,
  `dt_data` DATETIME NULL,
  `ds_aprovacao` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`cd_usodainstituicao`));



CREATE TABLE `tb_pessoaJuridica` (
  `cd_pessoaJuridica` INT NOT NULL,
  `cd_cnpj` INT NOT NULL,
  `nm_razaoSoci` VARCHAR(200) NOT NULL,
  `nr_participacacao` DOUBLE NOT NULL,
  `tb_pessoaJuridicacol` VARCHAR(45) NULL,
  `tb_usoDaInstituicao_cd_usodainstituicao` INT NOT NULL,
  PRIMARY KEY (`cd_pessoaJuridica`),
  CONSTRAINT `fk_tb_pessoaJuridica_tb_usoDaInstituicao1`
    FOREIGN KEY (`tb_usoDaInstituicao_cd_usodainstituicao`)
    REFERENCES `mydb`.`tb_usoDaInstituicao` (`cd_usodainstituicao`));



CREATE TABLE IF NOT EXISTS `mydb`.`tb_participacoesAcionarias` (
  `cd_participacoes` INT NOT NULL,
  `ds_razaosocial` VARCHAR(75) NULL,
  `cd_cnpj` INT NOT NULL,
  `ds_capitalsocial` VARCHAR(150) NULL,
  `vl_percentual` VARCHAR(45) NULL,
  `tb_pessoaJuridica_cd_pessoaJuridica` INT NOT NULL,
  PRIMARY KEY (`cd_participacoes`),
  CONSTRAINT `fk_tb_participacoesAcionarias_tb_pessoaJuridica1`
    FOREIGN KEY (`tb_pessoaJuridica_cd_pessoaJuridica`)
    REFERENCES `mydb`.`tb_pessoaJuridica` (`cd_pessoaJuridica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



CREATE TABLE `tb_referenciasComerciais` (
  `cd_referenciasComerciais` INT NOT NULL,
  `ds_razaosocial` VARCHAR(75) NULL,
  `cd_cnpj` INT NULL,
  `ds_capitalsocial` VARCHAR(150) NULL,
  `tb_referenciasComerciaiscol` VARCHAR(45) NULL,
  PRIMARY KEY (`cd_referenciasComerciais`));



CREATE TABLE `tb_cadastroCliente_has_tb_pessoaJuridica` (
  `tb_cadastroCliente_cd_cadastroCliente` INT NOT NULL,
  `tb_pessoaJuridica_cd_pessoaJuridica` INT NOT NULL,
  PRIMARY KEY (`tb_cadastroCliente_cd_cadastroCliente`, `tb_pessoaJuridica_cd_pessoaJuridica`),
  CONSTRAINT `fk_tb_cadastroCliente_has_tb_pessoaJuridica_tb_cadastroCliente`
    FOREIGN KEY (`tb_cadastroCliente_cd_cadastroCliente`)
    REFERENCES `mydb`.`tb_cadastroCliente` (`cd_cadastroCliente`),
  CONSTRAINT `fk_tb_cadastroCliente_has_tb_pessoaJuridica_tb_pessoaJuridica1`
    FOREIGN KEY (`tb_pessoaJuridica_cd_pessoaJuridica`)
    REFERENCES `mydb`.`tb_pessoaJuridica` (`cd_pessoaJuridica`));


CREATE TABLE`tb_participacoesAcionarias_has_tb_referenciasComerciais` (
  `tb_participacoesAcionarias_cd_participacoes` INT NOT NULL,
  `tb_referenciasComerciais_cd_referenciasComerciais` INT NOT NULL,
  PRIMARY KEY (`tb_participacoesAcionarias_cd_participacoes`, `tb_referenciasComerciais_cd_referenciasComerciais`),
  CONSTRAINT `fk_tb_participacoesAcionarias_has_tb_referenciasComerciais_tb1`
    FOREIGN KEY (`tb_participacoesAcionarias_cd_participacoes`)
    REFERENCES `mydb`.`tb_participacoesAcionarias` (`cd_participacoes`),
  CONSTRAINT `fk_tb_participacoesAcionarias_has_tb_referenciasComerciais_tb2`
    FOREIGN KEY (`tb_referenciasComerciais_cd_referenciasComerciais`)
    REFERENCES `mydb`.`tb_referenciasComerciais` (`cd_referenciasComerciais`));


CREATE TABLE `tb_responsaveisProcuradores_has_tb_contatos` (
  `tb_responsaveisProcuradores_cd_responsaveis` INT NOT NULL,
  `tb_contatos_cd_contatos` INT NOT NULL,
  PRIMARY KEY (`tb_responsaveisProcuradores_cd_responsaveis`, `tb_contatos_cd_contatos`),
  CONSTRAINT `fk_tb_responsaveisProcuradores_has_tb_contatos_tb_responsavei1`
    FOREIGN KEY (`tb_responsaveisProcuradores_cd_responsaveis`)
    REFERENCES `mydb`.`tb_responsaveisProcuradores` (`cd_responsaveis`),
  CONSTRAINT `fk_tb_responsaveisProcuradores_has_tb_contatos_tb_contatos1`
    FOREIGN KEY (`tb_contatos_cd_contatos`)
    REFERENCES `mydb`.`tb_contatos` (`cd_contatos`));
 


