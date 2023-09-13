<?php return [
  'plugin' => [
    'name' => 'Stránky',
    'description' => 'Funkce pro správu stránek a menu.',
  ],
  'page' => [
    'menu_label' => 'Stránky',
    'template_title' => '%s Stránky',
    'delete_confirmation' => 'Opravdu chcete odstranit vybrané stránky? Budou odstraněny i případné podstránky.',
    'no_records' => 'Stránky nenalezeny',
    'delete_confirm_single' => 'Opravu chcete odstranit tuto stránku? Budou odstraněny i případné podstránky.',
    'new' => 'Nová stránka',
    'add_subpage' => 'Přidat podstránku',
    'invalid_url' => 'Neplatný formát URL. URL by mělo začínat lomítkem a může obsahovat čísla, písmena a znaky: _-/',
    'url_not_unique' => 'Toto URL je používáno jinou stránkou.',
    'layout' => 'Layouty',
    'layouts_not_found' => 'Layouts nenalezeny',
    'saved' => 'Stránka byla úspěšně uložena.',
    'tab' => 'Stránky',
    'manage_pages' => 'Spravovat stránky',
    'manage_menus' => 'Spravovat menu',
    'access_snippets' => 'Používat snippety',
    'manage_content' => 'Spravovat obsah',
  ],
  'menu' => [
    'menu_label' => 'Menu',
    'delete_confirmation' => 'Opravdu chcete odstranit vybraná menu?',
    'no_records' => 'Položky nenalezeny',
    'new' => 'Nové menu',
    'new_name' => 'Nové menu',
    'new_code' => 'nove-menu',
    'delete_confirm_single' => 'Opravdu chcete odstranit toto menu?',
    'saved' => 'Menu bylo úspěšně uloženo.',
    'name' => 'Název',
    'code' => 'Kód',
    'items' => 'Položky menu',
    'add_subitem' => 'Přidat položku',
    'code_required' => 'Pole kód je povinné.',
    'invalid_code' => 'Pole kód obsahuje neplatné znaky. Může obsahovat pouze číslice, písmena a znaky: _-',
  ],
  'menuitem' => [
    'title' => 'Titulek',
    'editor_title' => 'Upravit položku menu',
    'type' => 'Typ',
    'allow_nested_items' => 'Povolit vnořené položky',
    'allow_nested_items_comment' => 'Vnořené položky mohou být automaticky vygenerovány statickými stránkami nebo jinými typy stránek.',
    'url' => 'URL',
    'reference' => 'Odkaz',
    'search_placeholder' => 'Prohledat odkazy...',
    'title_required' => 'Titulek je povinný',
    'unknown_type' => 'Neznámý typ položky',
    'unnamed' => 'Nepojmenovaný typ položky',
    'add_item' => 'Přidat položku',
    'new_item' => 'Nová položka menu',
    'replace' => 'Nahradit tuto položku jejími vygenerovanými vnořenými položkami',
    'replace_comment' => 'Toto pole zaškrtněte, pokud si přejete vnořené položky posunout na stejnou úroveň jako má tato položka. Samotná položka zůstane skryta.',
    'cms_page' => 'CMS stránka',
    'cms_page_comment' => 'Vyberte stránku, která se otevře při kliknutí na tuto položku v menu.',
    'reference_required' => 'Odkaz je povinný.',
    'url_required' => 'URL je povinné',
    'cms_page_required' => 'Prosím vyberte CMS stránku',
    'display_tab' => 'Zobrazení',
    'hidden' => 'Skrytá',
    'hidden_comment' => 'Skrýt tuto položku menu pro celý front-end.',
    'attributes_tab' => 'Vlastnosti',
    'code' => 'Kód',
    'code_comment' => 'Zadejte kód položky menu pokud k ní chcete přistupovat přes API.',
    'css_class' => 'CSS třída',
    'css_class_comment' => 'Vložte název CSS třídy k zajištění specifického vzhledu této položky menu.',
    'external_link' => 'Externí odkaz',
    'external_link_comment' => 'Otevřít odkaz této položky v novém okně.',
    'static_page' => 'Statická stránka',
    'all_static_pages' => 'Všechny statické stránky',
  ],
  'content' => [
    'menu_label' => 'Obsah',
    'cant_save_to_dir' => 'Ukládat obsah do složky statických stránek není povoleno.',
  ],
  'sidebar' => [
    'add' => 'Přidat',
  ],
  'object' => [
    'invalid_type' => 'Neznámý typ objektu',
    'not_found' => 'Požadovaný objekt nebyl nalezen.',
  ],
  'editor' => [
    'title' => 'Titulek',
    'new_title' => 'Nový titulek stránky',
    'content' => 'Obsah',
    'url' => 'URL',
    'filename' => 'Název souboru',
    'layout' => 'Layout',
    'description' => 'Popis',
    'preview' => 'Náhled',
    'enter_fullscreen' => 'Vstoupit do režimu celé obrazovky',
    'exit_fullscreen' => 'Opustit režim celé obrazovky',
    'hidden' => 'Skrytá',
    'hidden_comment' => 'Skryté stránky jsou dostupné pouze přihlášeným administrátorům.',
    'navigation_hidden' => 'Skrýt v menu',
    'navigation_hidden_comment' => 'Zaškrtněte toto pole, pokud chcete stránku skrýt z automaticky vygenerovaných menu a drobečkové navigace.',
  ],
  'snippet' => [
    'menu_label' => 'Snippety',
  ],
];