<?php

namespace App\Tricksy\Cooking;

class Recipe 
{
    private $recipeName;
    private $ingredientList;
    private $method = "";
    private $dietaryList;

    public function __construct($recipeName)
    {
        $this->recipeName = $recipeName;
        $this->ingredientList = collect();

    }

    public function addIngredient($ingredient, $quantity)
    {
        $this->ingredientList->push([
            "quantity" => $quantity,
            "ingredient" => $ingredient
            ]);
    }

   
    public function addMethod($userMethod)
    {
        $this->method = $userMethod;
        return $this;
    }

    public function display()
    {
        $formattedIngredients = $this->ingredientList->reduce(fn($acc, $current) => $acc .= "\n - {$current['quantity']} {$current['ingredient']->name()}", "");
        return "{$this->recipeName} \n \n Ingredients \n {$formattedIngredients} \n\n Method \n\n {$this->method}";
    }

    public function dietary()
    {
        $newIng = collect();
        foreach($this->ingredientList as $ingredient)
        {
            $newIng->push($ingredient["ingredient"]->dietary());
        }
        return $newIng->flatten()->unique()->implode(", ");
  
    }

    public function vegan()
    {
        foreach($this->ingredientList as $ingredient)
        {
            return !$ingredient["ingredient"]->vegan();        
        }
    }
}