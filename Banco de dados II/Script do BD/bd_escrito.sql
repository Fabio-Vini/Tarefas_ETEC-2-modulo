#FABIO VINICIUS SANTOS DE FREITAS  2DS

create database bd_biblioetca;

use bd_biblioteca;

create table tb_aluno
	(
    rm_aluno int unsigned not null auto_increment,
    nm_aluno varchar(45) null,
    primary key (rm_aluno)
    );
    
create table tb_curso
		(
        id_curso varchar(45) null,
        nm_curso varchar(45) null,
        hs_curso varchar(45),
        primary key (id_curso)
        );
        
 create table tb_livro
	(
    ds_livro varchar(45) null,
    nm_livro varchar(45) null,
    dt_lancamento date,
    primary key (ds_livro)
    );
    
create table tb_autor_livro
	(
    tb_livro_ds_livro varchar(45) null,
    id_autor_livro int unsigned auto_increment null,
    primary key (id_autor_livro)
    );	    
    
create table tb_autor
		(
        id_autor int unsigned auto_increment null,
        nm_autor varchar(45) null,
        tb_autor varchar(45),
        primary key (id_autor)
        );
        
create table tb_autor_livro_has_tb_autor
	(
    tb_autor_id_autor char(20), 
	constraint fk_autor foreign key (cd_autor) references tb_autor (cd_autor),
    constraint fk_livro foreign key (cd_livro) references tb_livro (cd_livro)
    );
    
    create table tb_livro_locacao
		(
        id_livro_locacao varchar(45) null,
        constraint fk_livro foreign key (cd_livro) references tb_livro (cd_livro),
        constraint fk_locacao foreign key (cd_locacao) references tb_locacao (cd_locacao),
        primary key (cd_livro)
        );
        
	create table tb_locacao
		(
        rm_aluno char(10) null auto_increment,
        id_livro varchar(45) null,
        dt_emprestimo date null,
        dt_devolucao date null,
        primary key (rm_aluno)
        );
        
        create table tb_genero
        (
        ds_genero varchar(45) null,
        nm_genero varchar(45) not null,
        primary key (ds_genero)
        );
        
    create table tb_genero_livro
		(
        id_genero_livro varchar(45) null,
        tb_genero_ds_genero varchar (45) null,
        tb_livro_ds_livro varchar (45) null,
        constraint fk_genero foreign key (ds_genero) references tb_genero (ds_genero),
		constraint fk_livro foreign key (ds_livro) references tb_livro (ds_livro),
        primary key (id_genero_livro)
        );
