document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("inventoryForm").addEventListener("submit", function(e) {
        e.preventDefault();
        const chickenCount = document.getElementById("chickenCount").value;
        const feedStock = document.getElementById("feedStock").value;
        const medicationStock = document.getElementById("medicationStock").value;
        console.log(`Inventory Updated - Chicken Count: ${chickenCount}, Feed Stock: ${feedStock}, Medication Stock: ${medicationStock}`);
        alert("Inventory updated successfully!");
    });

    document.getElementById("productionForm").addEventListener("submit", function(e) {
        e.preventDefault();
        const eggCount = document.getElementById("eggCount").value;
        const meatProduced = document.getElementById("meatProduced").value;
        console.log(`Production Recorded - Egg Count: ${eggCount}, Meat Produced: ${meatProduced}`);
        alert("Production recorded successfully!");
    });

    document.getElementById("salesForm").addEventListener("submit", function(e) {
        e.preventDefault();
        const customerName = document.getElementById("customerName").value;
        const quantity = document.getElementById("quantity").value;
        const totalPrice = document.getElementById("totalPrice").value;
        console.log(`Sale Recorded - Customer Name: ${customerName}, Quantity: ${quantity}, Total Price: ${totalPrice}`);
        alert("Sale recorded successfully!");
    });
});

function showSection(sectionId) {
    const sections = document.querySelectorAll("main section");
    sections.forEach(section => {
        if (section.id === sectionId) {
            section.classList.remove("hidden");
        } else {
            section.classList.add("hidden");
        }
    });
}