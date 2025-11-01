<?php

namespace App\Filament\Resources\Players\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class PlayerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('gender'),
                TextEntry::make('display_name'),
                ImageEntry::make('portrait')
                ->disk('public'),
                ImageEntry::make('alt_photo_1')
                ->disk('public'),
                ImageEntry::make('alt_photo_2')
                ->disk('public'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
