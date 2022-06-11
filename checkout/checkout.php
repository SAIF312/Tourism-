<!DOCTYPE html>
<html>


<head>
<link rel="stylesheet" href="syle.css">

</head>

<body>




<div class="container">
    <section class="product">
      <div class="product__details">
        <h1 class="product__details-heading">DJI Phantom</h1>
        <span class="product__details-sub-heading">P3 Standard</span>
  
        <div class="product__details-image-wrapper">
          <img class="product__details-image" src="https://image.ibb.co/nFfzRK/phantom_3_standard.png" alt="">
        </div>
  
        <div class="product__details-basket">
          <div class="product__details-basket-item">
            <span class="product__details-basket-heading">Quantity</span>
            <div class="product__details-basket-quantity-wrapper">
              <select class="product__details-basket-quantity" name="quantity" id="quantity" data-product-quantity>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
  
          <div class="product__details-basket-item">
            <span class="product__details-basket-heading product__details-basket-heading--right">Price</span>
            <span class="product__details-basket-price" data-product-price>$386.78</span>
          </div>
        </div>
      </div>
  
      <form class="card-details" action="" data-form>
        <fieldset class="card-details__fieldset">
          <span class="card-details__heading">Card Type</span>
  
          <div class="card-details__cards" data-card-types>
            <div class="card-details__cards-item">
              <input class="card-details__card-input" type="radio" name="cardType" id="visa" data-card-type="visa" checked>
              <label class="card-details__card-label" for="visa">Visa</label>
              <img class="card-details__cards-image" src="https://svgshare.com/i/7h2.svg" alt="Visa Card" aria-hidden="true">
            </div>
  
            <div class="card-details__cards-item">
              <input class="card-details__card-input" type="radio" name="cardType" id="mastercard" data-card-type="mastercard">
              <label class="card-details__card-label" for="mastercard">MasterCard</label>
              <img class="card-details__cards-image" src="https://svgshare.com/i/7fu.svg" alt="MasterCard" aria-hidden="true">
            </div>
  
            <div class="card-details__cards-item">
              <input class="card-details__card-input" type="radio" name="cardType" id="discover" data-card-type="discover">
              <label class="card-details__card-label" for="discover">Discover</label>
              <img class="card-details__cards-image" src="https://svgshare.com/i/7hP.svg" alt="Discover Card" aria-hidden="true">
            </div>
  
            <div class="card-details__cards-item">
              <input class="card-details__card-input" type="radio" name="cardType" id="express" data-card-type="express">
              <label class="card-details__card-label" for="express">American Express</label>
              <img class="card-details__cards-image" src="https://svgshare.com/i/7gD.svg" alt="Amercican Express Card" aria-hidden="true">
            </div>
          </div>
        </fieldset>
  
        <fieldset class="card-details__fieldset">
          <span class="card-details__heading">Card Number</span>
  
          <div class="card-details__number">
            <div class="card-details__number-field">
              <label for="cardNumberFirstFour" class="card-details__number-label">First Four Digits</label>
              <input class="card-details__number-input" type="text" maxlength="4" name="card-number" value="0000" id="cardNumberFirstFour" data-input>
            </div>
  
            <div class="card-details__number-field">
              <label for="cardNumberSecondFour" class="card-details__number-label">Second Four Digits</label>
              <input class="card-details__number-input" type="text" maxlength="4" name="card-number" value="0000" id="cardNumberSecondFour" data-input>
            </div>
  
            <div class="card-details__number-field">
              <label for="cardNumberThirdFour" class="card-details__number-label">Third Four Digits</label>
              <input class="card-details__number-input" type="text" maxlength="4" name="card-number" value="0000" id="cardNumberThirdFour" data-input>
            </div>
  
            <div class="card-details__number-field">
              <label for="cardNumberFirstFour" class="card-details__number-label">Last Four Digits</label>
              <input class="card-details__number-input" type="text" maxlength="4" name="card-number" value="0000" id="cardNumberLastFour" data-input>
            </div>
  
            <div class="card-details__number-card">
              <img class="card-details__number-card-image" src="https://svgshare.com/i/7h2.svg" alt="Visa Card" data-card-image>
            </div>
          </div>
        </fieldset>
  
        <fieldset class="card-details__fieldset">
          <span class="card-details__heading" aria-hidden="true">Card Holder Name</span>
          <div class="card-details__holder">
            <label class="card-details__holder-label" for="cardHolderName">Card Holder Name</label>
            <input class="card-details__holder-input" type="text" id="cardHolderName" data-input>
          </div>
        </fieldset>
  
        <fieldset class="card-details__fieldset">
          <div class="card-details__expiration">
            <span class="card-details__heading" aria-hidden="true">Expiration Date</span>
            <div class="card-details__expiration-date">
              <label class="card-details__expiration-date-label" for="expirationDate">Expiration Date</label>
              <input class="card-details__expiration-date-input" type="text" maxlength="7" value="MM / YY" id="expirationDate" data-input>
            </div>
          </div>
  
          <div class="card-details__security">
            <span class="card-details__heading" aria-hidden="true">CVV</span>
            <div class="card-details__details__security-code">
              <label class="card-details__security-code-label" for="expirationDate">CVV</label>
              <input class="card-details__security-code-input" type="text" maxlength="3" value="000" id="expirationDate" data-input>
            </div>
          </div>
        </fieldset>
  
        <button class="card-details__submit" type="button" data-submit-button>Purchase</button>
      </form>
    </section>
    
    <p>Design by <a href="https://dribbble.com/AmandaLumleyx">Amanda Lumley</a> via <a href="https://dribbble.com/shots/3237318-Daily-UI-002-Credit-Card-Checkout">Dribble</a></p>
  </div>



  <script>

function ValidationModule({ form, inputs, submit }) {
  const state = {
    form,
    inputs,
    submit
  };
  
  function focus({ target }) {
    if (target.defaultValue === target.value) {
      target.value = '';
    }
  }
  
  function blur({ target }) {
    const defaultClassName = target.className.split(' ')[0];
    
    if (target.value === '') {
      target.value = target.defaultValue;
      target.className = defaultClassName;
      return;
    }
    
    target.className = `${defaultClassName} ${defaultClassName}--valid`;
  }
  
  function delegateEvent(event) {
    if (event.target.nodeName !== 'INPUT') {
      return;
    }
    
    if (event.type === 'focus') {
      return focus(event);
    }
    
    if (event.type === 'blur') {
      return blur(event);
    }
  }

  function bindEvents() {
    form.addEventListener('focus', delegateEvent, true);
    form.addEventListener('blur', delegateEvent, true);
  }

  return {
    bindEvents
  }
}



function checkoutForm() {
  const form = document.querySelector('[data-form]');
  const quantity = document.querySelector('[data-product-quantity]');
  const cardTypes = form.querySelector('[data-card-types]');
  const data = {
    form,
    inputs: form.querySelectorAll('[data-input]'),
    submit: form.querySelector('[data-submit]')
  };
  
  function togglePriceChange({ target }) {
    const value = parseInt(target.value, 10);
    const initialPrice = 386.78;
    const price = document.querySelector('[data-product-price]');
    const newPrice = initialPrice * value;
    
    price.textContent = `$${newPrice.toFixed(2)}`;
  }

  function toggleCardType({ target }) {
    const cardImage = form.querySelector('[data-card-image]');
    const cardTypeValue = target.getAttribute('data-card-type');
    const cardPath = 'https://svgshare.com/i/';
    const cardTypeData = {
      visa: { src: `${cardPath}7h2.svg`, alt: 'Visa Card' },
      mastercard: { src: `${cardPath}7fu.svg`, alt: 'MasterCard' },
      discover: { src: `${cardPath}7hP.svg`, alt: 'Discover Card' },
      express: { src: `${cardPath}7gD.svg`, alt: 'American Express Card' }
    }
    
    if (cardTypeData.hasOwnProperty(cardTypeValue)) {
      const data = Object.getOwnPropertyDescriptor(cardTypeData, cardTypeValue);
      
      cardImage.src = data.value.src;
      cardImage.alt = data.value.alt;
    }
  }

  function init() {
    const validation = new ValidationModule(data);
    
    quantity.addEventListener('change', togglePriceChange);
    cardTypes.addEventListener('click', toggleCardType);
    validation.bindEvents();
  }

  init();
}

checkoutForm();

  </script>
</body>
</html>