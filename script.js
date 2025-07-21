 $(document).ready(function () {
    $('.counter').each(function () {
      var $el = $(this);
      var original = $el.data('count');

      $el.waypoint(function () {
        $el.prop('Counter', 0).animate({
          Counter: original
        }, {
          duration: 1000,
          easing: 'swing',
          step: function (now) {
            let value = Math.ceil(now);
            $el.text(value > 100 ? value + '+' : value);
          }
        });
      }, {
        offset: '100%',
        triggerOnce: false
      });
    });
  });

  function showSection(id) {
    const sections = document.querySelectorAll('.my-section'); // ✅ dot lagao
    const clickedSection = document.getElementById(id);

    const isAlreadyVisible = clickedSection.style.display === 'block';

    // 🔁 sab section hide karo
    sections.forEach(sec => sec.style.display = 'none');

    // ✅ agar already visible tha, toh kuch mat dikhao
    if (!isAlreadyVisible) {
      clickedSection.style.display = 'block';
    }
  }

  function hideAllSections() {
  document.querySelectorAll('.my-section').forEach(s => s.style.display = 'none');
}
function filterItems(id,element){
 
  const items =document.querySelectorAll('.item')
// const buttons =document.querySelectorAll('.filter-button')

//  buttons.forEach(btn => btn.classList.add('active-filter'));
const buttons = document.querySelectorAll('.filter-button');
if (element && element.disabled) return;
  // Remove class from all buttons first
  buttons.forEach(btn =>
    {
      const letter = btn.dataset.letter;
      console.log(letter)
      btn.classList.remove('active-filter')
    } );

  // Add class only to clicked/hovered button
  if (element) {
    element.classList.add('active-filter');
  }
    items.forEach(item => {
       if (id === 'All') {
      item.style.display = 'block';
    } else {
      item.style.display = item.textContent.trim().startsWith(id) ? 'block' : 'none';
    }
    // item.style.display = item.textContent.trim().startsWith(id) ? 'block' : 'none';
  });

}

function updateFilterButtons() {
  const items = document.querySelectorAll('.item');
  const buttons = document.querySelectorAll('.filter-button');

  buttons.forEach(button => {
    const letter = button.dataset.letter; // e.g., A, B, C
    let hasMatch = false;

    items.forEach(item => {
      const text = item.textContent.trim();
      if (text.startsWith(letter)) {
        hasMatch = true;
      }
    });

    // Enable or disable button
    button.disabled = !hasMatch;
  });
}
window.onload = function () {
  updateFilterButtons(); // Disable buttons that have no matching items
};
