select department, date_hired, DATEDIFF(MONTH, date_hired, GETDATE()) as diff
from employees
join departments
on employees.department_id = departments.id 
where DATEDIFF(MONTH, date_hired, GETDATE()) between 35 and 45


