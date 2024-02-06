<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OpcoeResource\Pages;
use App\Filament\Resources\OpcoeResource\RelationManagers;
use App\Models\Opcoe;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OpcoeResource extends Resource
{
    protected static ?string $model = Opcoe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('nome')
                ->required()
                ->maxLength(35),
            Forms\Components\TextInput::make('titulo')
                ->required()
                ->maxLength(100),
            Forms\Components\MarkdownEditor::make('descricao')
                ->required()
                ->maxLength(1200),
            Forms\Components\FileUpload::make('imagem')
                ->maxSize(50000)
                ->required(),
            Forms\Components\TextInput::make('preco')
                ->required()
                ->numeric(10,2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('nome')
                ->searchable(),
            Tables\Columns\TextColumn::make('titulo')
                ->label('Título')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('preco')
                ->label('Preço')
                ->numeric(2)
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->label('Organizar por Criação')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOpcoes::route('/'),
            'create' => Pages\CreateOpcoe::route('/create'),
            'edit' => Pages\EditOpcoe::route('/{record}/edit'),
        ];
    }
}
