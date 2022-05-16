<?php

create database gauchoRocket;

use gauchoRocket;

Create Table Usuario (
    UsuarioId INT PRIMARY KEY AUTO_INCREMENT,
    Edad INT,
    Email Varchar(100) UNIQUE,
    Nombre Varchar(100),
    Apellido Varchar(100),
    Nivel INT,
    CodigoViajero INT UNIQUE
);

    Create Table Viajes (
    ViajesId INT PRIMARY KEY AUTO_INCREMENT,
    FechaDePartida DATE,
    Duracion INT,
    TipoVuelo Varchar(100),
    NombreEquipo Varchar(100),
    Escala Varchar(100),
    Capacidad INT
);

	Create Table CentroMedico(
    CentriId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre Varchar(50),
    Capacidad INT
);

	Create Table Equipo(
    EquipoId INT PRIMARY KEY AUTO_INCREMENT,
    Tipo Varchar(50),
    Modelo Varchar(50),
    Capacidad INT,
    Cabinas Varchar(1),
    Nivel INT,
    Matricula Varchar(6)
);

	Create Table Destinos(
    DestinosId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre Varchar(50),
    Circuito Varchar(50)
);

	Create Table Partida(
    PartidaId INT PRIMARY KEY AUTO_INCREMENT,
    Nombre Varchar(50)
);

