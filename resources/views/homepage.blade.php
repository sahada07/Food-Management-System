@extends("layout")
@section('title','Food Menu')

@section('content')

<style>
  .accordion-button {
    background-color: #FF5722;
    color: white;
    font-weight: bold;
  }
  .accordion-button:hover {
    background-color: #E64A19;
  }
  .accordion-item {
    border: none;
    margin-bottom: 10px;
  }
  .accordion-body {
    font-size: 1.1rem;
  }
  .featured-dishes {
    text-align: center;
    margin: 50px 0;
  }
  .dish-image {
    width: 100%;
    height: auto;
    border-radius: 10px;
  }
  .dish-title {
    font-size: 1.5rem;
    margin: 10px 0;
  }
  .dish-description {
    color: #757575;
  }
  .section-title {
    font-size: 2rem;
    color: #FF5722;
    text-align: center;
    margin-bottom: 30px;
  }
</style>

<div class="featured-dishes">
  <h2 class="section-title">Our Featured Dishes</h2>

  <div class="row">
    <div class="col-md-4">
      <img src="https://via.placeholder.com/400x300" alt="Dish 1" class="dish-image">
      <h3 class="dish-title">Spicy Chicken Wings</h3>
      <p class="dish-description">Crispy and juicy chicken wings with a spicy kick, served with our special dipping sauce.</p>
    </div>
    <div class="col-md-4">
      <img src="https://via.placeholder.com/400x300" alt="Dish 2" class="dish-image">
      <h3 class="dish-title">Grilled Salmon</h3>
      <p class="dish-description">Perfectly grilled salmon served with a side of sautéed vegetables and garlic mashed potatoes.</p>
    </div>
    <div class="col-md-4">
      <img src="https://via.placeholder.com/400x300" alt="Dish 3" class="dish-image">
      <h3 class="dish-title">Vegan Delight</h3>
      <p class="dish-description">A delicious and healthy vegan platter with a variety of grilled vegetables and quinoa salad.</p>
    </div>
  </div>
</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Appetizers
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Garlic Bread, Stuffed Mushrooms, and Spring Rolls.</strong> Start your meal with these delightful and flavorful appetizers, served hot and fresh.
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Main Course
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Pasta, Grilled Chicken, and Beef Steak.</strong> Indulge in our savory main courses, cooked to perfection with fresh ingredients.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Desserts
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Cheesecake, Brownie, and Ice Cream Sundae.</strong> End your meal on a sweet note with our mouth-watering dessert options.
      </div>
    </div>
  </div>
</div>

@endsection
