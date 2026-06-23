CREATE DATABASE IspeedFast;
USE IspeedFast;

-- SUPERCLASSE --
CREATE TABLE Cadastro ( --1--
    ID_Cadastro INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Telefone VARCHAR(20) UNIQUE,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Senha VARCHAR(20) NOT NULL,
    Tipo_Cadastro VARCHAR(13) NOT NULL
);

-- SUBCLASSE(Cadastro) --
CREATE TABLE Administrador ( --2--
    ID_Cadastro_FK INT PRIMARY KEY,
    Acesso VARCHAR(20) UNIQUE NOT NULL,
    Formacao VARCHAR(50) NOT NULL,

    FOREIGN KEY (ID_Cadastro_FK) REFERENCES Cadastro(ID_Cadastro)
);

-- SUBCLASSE(Cadastro) --
CREATE TABLE Aluno ( --3--
    ID_Cadastro_FK INT PRIMARY KEY,
    Matricula VARCHAR(20) UNIQUE NOT NULL,
    Ano_Ingresso INT NOT NULL,
    Curso VARCHAR(30) NOT NULL,

    FOREIGN KEY (ID_Cadastro_FK) REFERENCES Cadastro(ID_Cadastro)
);


-- CLASSE --
CREATE TABLE Professor ( --4--
    ID_Professor INT PRIMARY KEY,
    Nome_Professor VARCHAR(50) NOT NULL,
    Disciplina VARCHAR(40) NOT NULL
);

-- CLASSE --
CREATE TABLE Agenda ( --5--
    ID_Agenda INT PRIMARY KEY,
    Ano_Letivo INT UNIQUE NOT NULL,
    Data_Agenda DATE,
    Itens_Agenda VARCHAR(50),
    ID_subAdmin_FK INT,

    FOREIGN KEY (ID_subAdmin_FK) REFERENCES Administrador(ID_Cadastro_FK)
);

-- SUPERCLASSE --
CREATE TABLE Espaco ( --6--
    ID_Espaco INT PRIMARY KEY,
    Capacidade INT,
    Status_Espaco BOOLEAN NOT NULL,
    Tipo_Espaco VARCHAR(15) NOT NULL
);

-- SUBCLASSE(Espaco) --
CREATE TABLE Sala ( --7--
    ID_Espaco_FK INT PRIMARY KEY,
    Numero_Sala VARCHAR(30) UNIQUE NOT NULL,
    Qntd_Carteiras INT,
    Projetor_Sala BOOLEAN,

    FOREIGN KEY (ID_Espaco_FK) REFERENCES Espaco(ID_Espaco)
);

-- SUBCLASSE(Espaco) --
CREATE TABLE Laboratorio ( --8--
    ID_Espaco_FK INT PRIMARY KEY,
    Nome_Lab VARCHAR(30) UNIQUE NOT NULL,
    Descricao_Lab VARCHAR(255) NOT NULL,
    Recursos_Lab VARCHAR(255) NOT NULL,

    FOREIGN KEY (ID_Espaco_FK) REFERENCES Espaco(ID_Espaco)
);

-- CLASSE --
CREATE TABLE Reserva ( --9--
    ID_Reserva INT PRIMARY KEY,
    Hora_Inicio TIME NOT NULL,
    Hora_Fim TIME NOT NULL,
    Descricao VARCHAR(255),
    Data_Reserva DATE NOT NULL,
    Status_Reserva BOOLEAN NOT NULL,
    ID_subAluno_FK INT,
    ID_Professor_FK INT,
    ID_Agenda_FK INT,
    ID_Espaco_FK INT,

    FOREIGN KEY (ID_subAluno_FK) REFERENCES Aluno(ID_Cadastro_FK),
    FOREIGN KEY (ID_Professor_FK) REFERENCES Professor(ID_Professor),
    FOREIGN KEY (ID_Agenda_FK) REFERENCES Agenda(ID_Agenda),
    FOREIGN KEY (ID_Espaco_FK) REFERENCES Espaco(ID_Espaco)
);

-- CLASSE --
CREATE TABLE Relatorio ( --10--
    ID_Relatorio INT PRIMARY KEY,
    Titulo VARCHAR(50) NOT NULL,
    Descricao_Rel VARCHAR(255),
    Data_Rel DATE NOT NULL,
    ID_subAdmin_FK INT,
    ID_Reserva_FK INT,

    FOREIGN KEY (ID_subAdmin_FK) REFERENCES Administrador(ID_Cadastro_FK),
    FOREIGN KEY (ID_Reserva_FK) REFERENCES Reserva(ID_Reserva)
);