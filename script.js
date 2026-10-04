const slots = document.querySelectorAll('.slot-card');
const peopleEl = document.getElementById('people');
const summarySlot = document.getElementById('summarySlot');
const summaryDuration = document.getElementById('summaryDuration');
const summaryPeople = document.getElementById('summaryPeople');
const totalEl = document.getElementById('total');

let people = 1;
let selectedSlot = null;

function updateSummary() {
  summaryPeople.textContent = people;
  totalEl.textContent = `₹${people * 600}`;

  if (selectedSlot) {
    summarySlot.textContent = selectedSlot.dataset.slot;
    summaryDuration.textContent = '4 Hours';
  }
}

slots.forEach(slot => {
  slot.addEventListener('click', () => {
    slots.forEach(s => s.classList.remove('selected'));
    slot.classList.add('selected');
    selectedSlot = slot;
    updateSummary();
  });
});

document.getElementById('minus').addEventListener('click', () => {
  if (people > 1) {
    people--;
    peopleEl.textContent = people;
    updateSummary();
  }
});

document.getElementById('plus').addEventListener('click', () => {
  if (people < 20) {
    people++;
    peopleEl.textContent = people;
    updateSummary();
  }
});

document.getElementById('confirm').addEventListener('click', () => {
  const name = document.getElementById('name').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const date = document.getElementById('date').value;

  if (!name || !phone || !date || !selectedSlot) {
    alert('Please fill in your details and select a guide slot.');
    return;
  }

  alert(`Booking confirmed!\\n\\n${name}\\n${selectedSlot.dataset.slot}\\n${people} Person(s)\\nTotal: ₹${people * 600}`);
});
