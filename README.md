# TableViewResourceToolNova

composer require seocomp/payroll_custom_view

a nova resource tool to provide a custom table view 

with three methods 

//table row values values
->rowsValues([
  [row 1 values],
  [row 2 values],
  [row 3 values],
  .
  .
  .
  .
])

//table headings values

->titles([
  hd,
  hd,
  hd,
  hd,
  hd
  .....

])

// title for view 
->title($title = '')

example:

            PayrollCustomView::make()->rowsValues($this->reportDetailsPage())
            ->titles([
                'Supervied Employee',
                'Type',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',

            ])->title($this->title())
                ->onlyOnDetail(),
![Alt text](Screen Shot 2021-12-30 at 6.04.41 PM.png?raw=true "Optional Title")
                
