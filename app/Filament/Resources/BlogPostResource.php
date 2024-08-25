<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateColumn; // Import DateColumn correctly
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('title')->required()->maxLength(255),
            TextInput::make('author'),
            RichEditor::make('content')->required(),
            DatePicker::make('published_at'),
            FileUpload::make('banner_image')
                ->label('Banner Image')
                ->image() // Ensure only image files are uploaded
                ->directory('blog_banners') // Directory where the images will be stored
                ->required(), // You can make it optional or required
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('author')->sortable(),
                TextColumn::make('published_at')
                    ->label('Published Date')
                    ->date('F j, Y') // Formats the date
                    ->sortable(),
                ImageColumn::make('banner_image')->label('Banner')->size(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
