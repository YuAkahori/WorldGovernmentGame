DROP FUNCTION IF EXISTS years_ago(INTEGER);

CREATE OR REPLACE FUNCTION years_ago(INTEGER)
RETURNS INTEGER AS $$
  SELECT (extract(year from current_date)::INTEGER - first_appeared)
  FROM programming
  WHERE id = $1;
  $$ LANGUAGE sql;

