<?php

defined('JPATH_BASE') or die;

jimport('joomla.html.html');
jimport('joomla.filesystem.file');
jimport('joomla.form.formfield');
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

class JFormFieldTzColor extends JFormField
{
	public $type = 'TzColor';


	protected function getInput() {

		$options_squirrel = array();
		// Get the path in which to search for file options.
		$path = (string) $this->element['directory'];

		if (!is_dir($path)) {
			$path = JPATH_ROOT.DIRECTORY_SEPARATOR.$path;
		}
		// Get a list of folders in the search path with the given filter.
		$folders = JFolder::folders($path, null);
		// Build the options list from the list of folders.
		if (is_array($folders)) {
			foreach($folders as $folder) {
				$options_squirrel[] = JHtml::_('select.option', $folder, $folder);
			}
		}

        $value      =   htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8');
        $slash = strpos($value, ';');


		$html = '<input type="text" name="'.$this->name.'" id="'.$this->id.'" class="tzcolorpicker" value="' . htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8') . '" />';



        $html .='
            <script type="text/javascript">
                jQuery(".tzcolorpicker").ColorPicker({
					onSubmit: function(hsb, hex, rgb, el) {
						jQuery(el).val(hex);
						jQuery(el).ColorPickerHide();
					},
					onBeforeShow: function () {
						jQuery(this).ColorPickerSetColor(this.value);
					}
				})
				.bind("keyup", function(){
					jQuery(this).ColorPickerSetColor(this.value);
				});
            </script>
        ';

		return $html;
	}
}