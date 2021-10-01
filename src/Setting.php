<?php

namespace SaTan\Dcat\Extensions\IceEditor;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Widgets\Alert;

class Setting extends Form
{
    protected function trans($key, $replace = [], $locale = null)
    {
        return parent::trans('setting.'.$key, $replace, $locale); // TODO: Change the autogenerated stub
    }

    public function form()
    {
        admin_exit(Alert::make()->content($this->trans('content'))->info());
    }

    public function title()
    {
        return $this->trans('title');
    }
}
