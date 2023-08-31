DROP TABLE IF EXISTS programming;

CREATE TABLE programming(
  id SERIAL,
  name VARCHAR(255) NOT NULL,
  first_appeared INT NOT NULL
);

INSERT INTO programming(name, first_appeared) VALUES
  ('Lisp', 1958),
  ('C', 1972),
  ('SQL', 1974),
  ('python', 1991),
  ('Java', 1995),
  ('PHP', 1995),
  ('Scala', 2004),
  ('Rust', 2010)
