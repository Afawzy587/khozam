<?php

namespace App\Widgets;

use App\Models\Job;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class jobs extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Job::count();
        $string = trans_choice('voyager::dimmer.job', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-pirate-swords',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.job_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.job_link_text'),
                'link' => route('voyager.jobs.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
