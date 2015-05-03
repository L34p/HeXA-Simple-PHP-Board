create table hmg0228(
    id int unsigned not null auto_increment primary key,
    name char(20) not null,
    pw char(20) not null,
    subject char(60) not null,
    content text,
    wdate char(20),
    hit int unsigned default'0'
)
