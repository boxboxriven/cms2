<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <div class="checkout-container">
        <div class="left-side">
            <div class="text-box">
                <h1 class="home-heading">Patisserie Mme Daoued</h1>
                <p class="home-price"><em>Votre Commande est prête !</em></p>
                <hr class="left-hr" />
                <p class="home-desc"><em>Service rapide garantie</em></p>
                <p class="home-desc"><em>Remboursement garantie en cas d'échec</em></p>
            </div>
        </div>

        <div class="right-side">
            <div class="receipt">
                <h2 class="receipt-heading">Sommaire</h2>
                <div>
                    <table class="table">
                        <tr class="total">
                            <td>Total</td>
                            <td class="price" id="price1"><?php echo $amount; ?> </td> <TD> DT</TD>

                        </tr>
                    </table>
                </div>
            </div>

            <div class="payment-info">
                <h3 class="payment-heading">Informations</h3>
                <form id="payment-form" class="form-box" enctype="text/plain">
                  
                    <div id="card-element">
                        <!-- Stripe Card Element will be mounted here -->
                    </div>
                    <button type="submit" class="btn">
                        <i class="fa-solid fa-lock"></i> Paiement Sécurisé
                    </button>
                </form>

                <p class="footer-text">
                    <i class="fa-solid fa-lock"></i>
                    Vos informations sont cryptées de bout en bout.
                </p>
            </div>
        </div>
    </div>

    <script>
    function setupPaymentForm() {
        var stripe = Stripe('pk_test_51OnortKVncrRsm2YGxONWdHHoYcTFHx3LljN2XAwxzn3BBpHwmCTwbEqE7iKSwNnkz6yHIfhg71VimDCPodT1fmu00VOKo1bJO');
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        var amountText = document.getElementById('price1').textContent; // Get the text content
        var amount = parseInt(amountText); // Convert the text co
  
        cardElement.mount('#card-element');
        
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    console.error(result.error.message);
                } else {
                    var token = result.token.id;
                    var amountText = document.getElementById('price1').textContent; // Get the text content
                    var amount = parseInt(amountText); // Convert the text content to an integer
                    var email = "test@example.com"; // Get email from your form or somewhere else

                    // Send token, amount, and email to your server to process payment
                    fetch('http://localhost:8000/api/payment', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            token: token,
                            amount: amount,
                            email: email
                        })
                    })
                    .then(function(response) {
                        return response;
                        console.error(amount);
                    })
                    .then(function(data) {
                        console.error(amount);
                        if (data.client_secret) {
                            // Payment intent created successfully, proceed to confirm the payment
                            stripe.confirmCardPayment(data.client_secret, {
                                payment_method: {
                                    card: cardElement,
                                    billing_details: {
                                        email: email
                                        // Add additional billing details if needed
                                    }
                                }
                            }).then(function(result) {
                                console.error(amount);
                                if (result.error) {
                                    // Payment failed, handle error
                                    console.error(result.error.message);
                                } else {
                                    // Payment succeeded, redirect or show success message
                                    console.log(result.paymentIntent);
                                }
                            });
                        } 
                    })
                    .catch(function(error) {
                        console.error('Error processing payment:', error);
                        console.error(amount);
                    });
                }
            });
        });
    }

    document.addEventListener('DOMContentLoaded', setupPaymentForm);
</script>

</body>
</html>


<style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  font-size: 62.5%; /* 10/16 = 0.625 * 100 */
}

body {
  background: url('https://www.patisserie.tn/Patisserie.tn%20%E2%80%93%20Patisserie%20Tunisienne%20_%20P%C3%A2tisserie%20Tunisie%202020_files/patisserie-tunisienne-Tunisie.jpg');
  background-position: center;
  background-size: cover;
  backdrop-filter: blur(8px);
  color: #3c3c39;

  display: flex;
  justify-content: center;
  height: 100vh;
  font-family: 'Monsterrat', sans-serif;
  position: relative;
  padding: 2rem 0;
}

.checkout-container {
  /* background-color: red; */
  max-width: 120rem;
  height: 50rem;
  display: grid;
  grid-template-columns: 1fr 1fr;
  justify-content: center;
  /* margin-bottom: 10rem; */
}

em {
  font-style: normal;
  font-weight: 700;
}

hr {
  color: #fff;
  margin-bottom: 1.2rem;
}

/* Left Side Of Container */
.left-side {
  background: url('https://www.mariageatoutprix.com/wp-content/uploads/2023/01/patisserie-mmejamel-sucr%C3%A9-sal%C3%A9-mariage-outia-hlou-meilleurs-adresse-nabeul-2.jpg');
  background-position: center;
  background-size: cover;
  position: relative;
}

.text-box {
  background: rgba(95, 121, 134, 0.8);
  width: 100%;
  padding: 1rem 2rem;
  position: absolute;
  bottom: 0;
}

/* Left container text */

.home-heading {
  color: #e8e8e1;
  font-size: 3.2rem;
  font-weight: 700;
  line-height: 1;
  margin-bottom: 1rem;
}

.home-price {
  color: #aeae97;
  font-size: 2rem;
  margin-bottom: 1.2rem;
}

.home-desc {
  color: #e8e8e1;
  font-size: 1.2rem;
  line-height: 1.5;
  letter-spacing: 0.5px;
}

/* Right Side of container */

.right-side {
  background-color: #fff;
  padding: 1.8rem 3.2rem;
}

.receipt {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  border-bottom: solid 1px;
  margin-bottom: 1rem;
}

.receipt-heading {
  font-size: 1.6rem;
  text-align: left;
}

.table {
  border-collapse: separate;
  border-spacing: 0 1.5rem;
  color: #64645f;
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
  width: 100%;
}

.total td {
  font-size: 1.4rem;
  font-weight: 700;
}

.price {
  text-align: end;
}

/* Payment Section */

.payment-heading {
  font-size: 1.4rem;
  margin-bottom: 1rem;
}

.form-box {
  display: grid;
  grid-template-rows: 1fr;
  gap: 1.5rem;
}

.card-logo {
  font-size: 2rem;
}

.expires,
.form-box label {
  font-size: 1.2rem;
  font-weight: 700;
}

.form-box input {
  font-family: inherit;
  font-size: 1.2rem;
  padding: 0.5rem;
  width: 100%;
}

.form-box select {
  padding: 0.5rem;
}

.form-box #cvv {
  width: 25%;
}

.cvv-info:link,
.cvv-info:visited {
  color: inherit;
  text-decoration: underline;
}

.cvv-info:hover,
.cvv-info:active {
  color: #5f7986;
  text-decoration: none;
}

.btn {
  background-color: #4c616b;
  border: none;
  border-radius: 8px;
  color: #eff2f3;
  font-size: 1.6rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  margin-bottom: 1rem;
  padding: 1.5rem;
  cursor: pointer;
}

.btn:hover {
  background-color: #5f7986;
  transition: ease-out 0.1s;
}

.footer-text {
  font-size: 1rem;
  text-align: center;
}

.form-box *:focus {
  outline: none;
  box-shadow: 0 0 0 0.8rem rgba(139, 139, 107, 0.5);
  border-radius: 8px;
}

</style>