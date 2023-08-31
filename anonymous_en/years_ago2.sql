DROP FUNCTION IF EXISTS years_ago(INTEGER);

CREATE OR REPLACE FUNCTION years_ago(first_appeared INTEGER)
RETURNS INTEGER AS $$
  DECLARE
    current_year INTEGER := extract(year from current_date)::INTEGER;
  BEGIN
    RETURN current_year - first_appeared;
  END;
$$ LANGUAGE plpgsql;


