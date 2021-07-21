select name,date_hired, DATEDIFF(MONTH, date_hired, GETDATE()) as Diff
from employees
where DATEDIFF(MONTH, date_hired, GETDATE()) between 35 and 45
order by date_hired desc

