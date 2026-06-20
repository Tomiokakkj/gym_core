const lista = document.getElementById("lista-carrinho");
const totalElemento = document.getElementById("total");

let total = 0;

carrinho.forEach(item => {
    // ...
});
const carrinho = JSON.parse(localStorage.getItem("carrinho_corefit")) || [];

const lista = document.getElementById("lista-carrinho");
const totalElemento = document.getElementById("total");

let total = 0;

carrinho.forEach(item => {
    const p = document.createElement("p");

    p.textContent =
        `${item.nome} - ${item.quantidade}x - R$ ${(item.preco * item.quantidade).toFixed(2).replace(".", ",")}`;

    lista.appendChild(p);

    total += item.preco * item.quantidade;
});

totalElemento.textContent = total.toFixed(2).replace(".", ",");

btnFinalizar.addEventListener("click", () => {
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    window.location.href = "Compra.html";
});
