create table huoneisto
(
	id		serial 	primary key,
	huoneisto_nro 	int 			--huoneiston numero taloyhtiössä

);
create table asukas
(
	id 		serial 		primary key,
	Sukunimi 	varchar(20) 	not null,
	huoneisto_id 	int 		references huoneisto
);

create table resurssi
(
	id		serial		 primary key,
    nimi 	varchar(30) 			--esim "pyykkikone 1"
	--kalenteri_ID integer references kalenteri(kalenteri),
	--viikonAika_ID integer references viikonAika(vuoronAlku), 
);

create table taloyhtiö
(
	Y_tunnus	    int		primary key,
	nimi		    varchar(40),		
	huoneistoLkm	int       
);

create table käyttäjä
(
    id      serial      primary key,
    tunnus  varchar(20) not null,
    salasana varchar(256) not null   
);

