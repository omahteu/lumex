const url = location.origin
const porta = location.port

const submenuItems = [
    { text: "Irradiações", link: `/forms/irradiacoes.html` },
    { text: "Clientes", link: `/forms/clientes.html` },
    { text: "Produtos", link: `/forms/produtos.html` },
    
];

document.addEventListener("DOMContentLoaded", function () {
    const submenuList = document.getElementById("submenu-list");

    submenuItems.forEach(item => {
        const listItem = document.createElement("li");
        const link = document.createElement("a");
        link.href = item.link;
        const span = document.createElement("span");
        span.className = "sub-item";
        span.textContent = item.text;
        link.appendChild(span);
        listItem.appendChild(link);
        submenuList.appendChild(listItem);
    });
});
