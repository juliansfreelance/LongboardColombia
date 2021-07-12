<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;

use Illuminate\Support\Str;

class ShowCategory extends Component
{
    public $category, $subcategories;

    public $createForm = [
        'name' => null,
        'slug' => null,
        'color' => false,
        'size' => false
    ];

    public function mount(Category $category){
        $this->category = $category;
        $this->getSubcategories();
    }


    public function updatedCreateFormName($value){
        $this->createForm['slug'] = Str::slug($value);
    }

    public function getSubcategories(){
        $this->subcategories = Subcategory::where('category_id', $this->category->id)->get();
    }

    public function save(){

    }

    public function render()
    {
        return view('livewire.admin.show-category')->layout('layouts.admin');
    }
}
