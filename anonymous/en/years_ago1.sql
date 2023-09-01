DROP FUNCTION IF EXISTS years_ago(INTEGER);

CREATE OR REPLACE FUNCTION years_ago(first_appeared INTEGER)
RETURNS INTEGER AS $$
  BEGIN
    RETURN (extract(year from current_date)::INTEGER - first_appeared);
  END;
$$ LANGUAGE plpgsql;
