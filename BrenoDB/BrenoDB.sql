CREATE DATABASE IspeedFast;
USE IspeedFast;

CREATE TABLE Usuario (
    ID_Usuário INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Telefone VARCHAR(20) UNIQUE,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Senha VARCHAR(20) NOT NULL,
    Tipo_Usuario VARCHAR NOT NULL
);

CREATE TABLE Admin (
    Acesso VARCHAR(20) UNIQUE NOT NULL,
    Formacao VARCHAR(50) NOT NULL,
    ID_Usuario_FK INT,

    FOREIGN KEY (ID_Usuario_FK) REFERENCES Usuario(ID_Usuário)
);

CREATE TABLE Aluno (
    Matricula VARCHAR(20) UNIQUE NOT NULL,
    Ano_Ingresso INT NOT NULL,
    Curso VARCHAR(30) NOT NULL,
    ID_Usuario_FK INT,

    FOREIGN KEY (ID_Usuario_FK) REFERENCES Usuario(ID_Usuario)
);

CREATE TABLE Professor (
    ID_Professor INT PRIMARY KEY,
    Nome_Professor VARCHAR(50) NOT NULL,
    Disciplina VARCHAR(40) NOT NULL
);

CREATE TABLE Agenda (
    ID_Agenda INT PRIMARY KEY,
    Ano_Letivo INT UNIQUE NOT NULL,
    Data_Agenda DATE,
    Itens_Agenda VARCHAR(50),
    ID_subAdmin_FK INT,

    FOREIGN KEY (ID_subAdmin_FK) REFERENCES Usuario(ID_Usuario)
);

CREATE TABLE Espaco (
    ID_Espaco INT PRIMARY KEY,
    Capacidade INT,
    Status_Espaco BOOLEAN NOT NULL,
    Tipo_Espaco VARCHAR(15) NOT NULL
);