<?php

/**
 * Form functions
 */


/**
 * Basic form creation
 * You must provide a valid content
 *
 * @param string $content
 * @param string $action
 * @param string $method
 * @param string $classes
 * @return string
 */
function getForm(string $content, string $action = '?', string $method = 'get', string $classes = 'btn-primary mt-2'): string
{
    return '<form action="' . $action . '" method="' . $method . '">
        <div>' . $content . '</div>
        <input type="submit" class="btn ' . $classes . '">
        </form>';
}

/**
 * Basic select form generator
 *
 * @param string $label
 * @param string $name
 * @param string $options
 * @param string $classes
 * @param string $styles
 * @return string
 */
function getSelect(string $label, string $name, string $options, string $classes = '', string $styles = ''): string
{
    if($classes == 'None'){
        $multiple = ' ';
        $multiple_array = '';
    } else {
        $multiple = 'multiple';
        $multiple_array = '[]';
    }
    return '<label for="f-' . $name . '">' . $label . '</label>
    <select ' . $multiple . ' class="f-select form-control ' . $classes . '" name="' . $name . 'L' . $multiple_array . '" id="f-' . $name . '" style="max-width: 300px; ' . $styles . '">
    <option selected >Tous</option>
        ' . $options . '
    </select>';
}
// Todo : Modifiez la fonction getSelect ci-dessus afin de permettre les options multiples.
// Attention que la fonction getSelect doit toujours permettre aux select simples de fonctionner.
// Une fois que la fonction est modifiée, faite en sorte que le formulaire "LaptopSearch" permette de choisir une ou plusieurs couleurs, résolution d'écran et/ou mémoire RAM.

/**
 * Basic input form generator
 *
 * @param string $label
 * @param string $name
 * @param string $type
 * @param string $classes
 * @param string $styles
 * @param string $param additional input attributes (raw string)
 * @return string
 */
function getInput(string $label, string $name, string $type, string $classes = '', string $param = '', string $styles = ''): string
{
    return '<label for="f-' . $name . '">' . $label . '</label>
            <input class="f-input ' . $classes . '" type="' . $type . '" name="' . $name . 'L" id="f-' . $name . '" ' . $param . ' style="' . $styles . '">';
}
