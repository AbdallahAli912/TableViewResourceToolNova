<?php

namespace Seo\PayrollCustomView;

use Laravel\Nova\ResourceTool;

class PayrollCustomView extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Payroll_Custom_View';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'payroll_custom_view';
    }

    /**
     * Map the values to custom attributes or conditions.
     *
     * @param array $values
     * @return $this
     */
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
