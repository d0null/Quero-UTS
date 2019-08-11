<?php

namespace App\Nova;

use Benjacho\BelongsToManyField\BelongsToManyField;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\TagsField\Tags;

class Publication extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Publication';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    public static function label()
    {
        return 'Publicaciones';
    }


    public static function singularLabel()
    {
        return 'Publicacion';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Tutor', 'mentor', 'App\Nova\Mentor')->help(
                'Selecciona el Tutor de la lista de tutores, de no encontrarse debes agregarlo'),
            BelongsToManyField::make('Linea de Investigacion', 'researchLines', 'App\Nova\ResearchLine')
                ->options(\App\ResearchLine::get())
                ->optionsLabel('title')
                ->rules('required', 'size:4'),
            BelongsToMany::make('Linea de Investigacion', 'researchLines', 'App\Nova\ResearchLine'),
            Text::make('Titulo', 'title'),
            Text::make('Autor', 'author'),
            Text::make('Url', 'url'),
            Textarea::make('Resumen', 'resume'),
            Select::make('Año de publicacíon', 'publish_year')->options([
                2001 => 2001,
                2002 => 2002,
                2003 => 2003,
                2004 => 2004,
                2005 => 2005,
                2006 => 2006,
                2007 => 2007,
                2008 => 2008,
                2009 => 2009,
                2010 => 2010,
                2011 => 2011,
                2012 => 2012,
                2013 => 2013,
                2014 => 2014,
                2015 => 2015,
                2016 => 2016,
                2017 => 2017,
                2018 => 2018,
                2019 => 2019,
            ]),
            Select::make('Mención', 'mention')->options([
                'publication' => 'Publicación',
                'honorific' => 'Honorifica',
                'none' => 'Ninguna',
            ]),
            Tags::make('Descriptores')
            ->sortable()
            ,
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

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
