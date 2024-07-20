(function(api) {

  api.sectionConstructor['creativium-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const creativium_section_lists = ['banner', 'service'];
  creativium_section_lists.forEach(creativium_homepage_scroll);

  function creativium_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('creativium_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);