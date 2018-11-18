create table if not exists role
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

create table if not exists user
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

create table if not exists active_session
(
  id VARCHAR
(
  40
),
  user_id INT,
  primary key
(
  id
)
  );

commit;