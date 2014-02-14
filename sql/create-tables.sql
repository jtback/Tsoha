create table asukas
(
asukasId serial primary key,
Sukunimi varchar(20) not null,
huoneisto int references huoneisto(huoneistoID)
);

create table resurssi
(
R_id integer primary key,
nimi varchar(30), --esim "pyykkikone 1"
kalenteri_ID integer references kalenteri(kalenteri),
viikonAika_ID integer references viikonAika(vuoronAlku), 
);

create table huoneisto
(
huoneistoId serial primary key,
huoneistoNro int foreign key,

);
