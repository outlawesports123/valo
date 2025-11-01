<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Actions\Action;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class HeroInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('portrait'),
                TextEntry::make('name'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                // Action::make('edit')
                //     ->url(fn($record) => \App\Filament\Resources\Heroes\HeroResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
