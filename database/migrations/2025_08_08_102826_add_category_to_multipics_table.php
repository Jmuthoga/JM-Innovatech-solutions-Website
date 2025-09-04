<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToMultipicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  public function index($category = null)
{
    $categories = Multipic::select('category')
                    ->distinct()
                    ->whereNotNull('category')
                    ->pluck('category');

    if ($category) {
        $images = Multipic::where('category', $category)->get();
    } else {
        $images = Multipic::all();
    }

    return view('pages.portfolio', compact('images', 'categories', 'category'));
}


}
