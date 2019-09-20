<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Template;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Image;

use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

class About extends Template {

    use HasFlexible;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {


        return [
            Text::make('Title of the page', 'title'),

            Flexible::make('content1')
         
            ->addLayout('Slider section', 'mainimage', [
                Text::make('Title'),
                Image::make('Main Image Thumbnail', 'mainimage')
             
            ])
            ->addLayout('Who we are ', 'whoweare', [
                Markdown::make('who we are')
            ])
            ->addLayout('What jesus did to us', 'whatjesus', [
                Markdown::make('what jesus did for us')
          
            ])
            ->addLayout('Video Link', 'videolink', [
                Text::make('Youtube video link')
            ])
            ->addLayout('Heart to heal', 'hearttoheal', [
                Markdown::make('His Heart To Heal You')
            ])
              ->addLayout('Ministries', 'ministries', [
                Markdown::make('Ministries')
            ])
        ];
    }


    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }
}