create table if not exists Role
(
  id
  INT
  AUTO_INCREMENT,
  name
  VARCHAR
(
  255
),
  primary key
(
  id
)
  );
insert into Role(name)
values ('Executor');
insert into Role(name)
values ('Customer');

create table if not exists User
(
  id
  INT
  AUTO_INCREMENT,
  name
  VARCHAR
(
  255
),
  password VARCHAR
(
  255
),
  role_id INT,
  primary key
(
  id
)
  );

commit;