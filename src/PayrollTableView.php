<?php

namespace Seo\PayrollTableView;

use Laravel\Nova\ResourceTool;

class PayrollTableView extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Payroll Table View';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'payroll-table-view';
    }

    public function rowsValues(array $rowsValues = null)
    {
        return $this->withMeta(['rowsValues' => $rowsValues]);
    }

    public function titles(array $titles = null)
    {
        return $this->withMeta(['titles' => $titles]);
    }

    public function title(String $title = null)
    {
        return $this->withMeta(['title' => $title]);
    }
}
