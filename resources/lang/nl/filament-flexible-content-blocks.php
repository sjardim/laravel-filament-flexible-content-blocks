<?php

    return [
        'columns.title' => 'Titel',
        'columns.is_published' => 'Gepubliceerd',
        'columns.is_published_state_published' => 'Gepubliceerd',
        'columns.is_published_state_unpublished' => 'Onbeschikbaar',
        'columns.is_published_state_published_future_info' => 'wordt gepubliceerd op :date',
        'columns.is_published_state_unpublished_future_info' => 'wordt onbeschikbaar op :date',

        'table_action.publish.publish_notification_success_title' => 'Gepubliceerd!',
        'table_action.publish.publish_notification_success_msg' => 'De pagina is nu gepubliceerd.',
        'table_action.publish.publish_notification_error_title' => 'Error',
        'table_action.publish.unpublish_notification_success_title' => 'Onbeschikbaar!',
        'table_action.publish.unpublish_notification_success_msg' => 'De pagina is nu onbeschikbaar.',
        'table_action.publish.unpublish_notification_error_title' => 'Error',
        'table_action.publish.publish_lbl' => 'Publiceer',
        'table_action.publish.unpublish_lbl' => 'Depubliceer',
        'table_action.view_page_lbl' => 'Bekijk',

        'form_component.translatable_hint' => 'Je kan dit veld vertalen.',
        'form_component.translatable_image_hint' => 'Je kan deze afbeelding vertalen.',
        'form_component.title_lbl' => 'Titel',
        'form_component.slug_lbl' => 'Slug',
        'form_component.slug_desc' => '<strong>Let op:</strong> Wanneer je de slug aanpast van een gepubliceerde pagina, verandert de URL van de pagina.',
        'form_component.code_lbl' => 'Code',
        'form_component.code_help' => 'Dit is een unieke code voor ontwikkelaars om de pagina mee op te zoeken in de applicatiecode. Deze kan na creatie niet meer aangepast worden.',
        'form_component.publishing_begins_at_lbl' => 'Publiceer vanaf',
        'form_component.publishing_ends_at_lbl' => 'Publiceer tot',
        'form_component.publication_section_title' => 'Publicatie',
        'form_component.seo_title_lbl' => 'SEO-titel',
        'form_component.seo_description_lbl' => 'SEO-beschrijving',
        'form_component.seo_image_lbl' => 'SEO-afbeelding',
        'form_component.seo_keywords_lbl' => 'SEO-trefwoorden',
        'form_component.overview_title_lbl' => 'Overzichtstitel',
        'form_component.overview_description_lbl' => 'Overzichtsbeschrijving',
        'form_component.overview_image_lbl' => 'Overzichtsafbeelding',
        'form_component.author_lbl' => 'Auteur',
        'form_component.hero_image_lbl' => 'Hoofdafbeelding',
        'form_component.hero_image_title_lbl' => 'Titel van de hoofdafbeelding',
        'form_component.hero_image_copyright_lbl' => 'Auteursrechten van de hoofdafbeelding',
        'form_component.hero_image_section_title' => 'Hoofdafbeelding',
        'form_component.intro_lbl' => 'Introductie',
        'form_component.content_blocks_lbl' => 'Inhoudsblokken',
        'form_component.content_blocks_add_lbl' => 'Voeg blok toe',
        'form_component.image_position_lbl' => 'Uitlijning afbeelding',
        'form_component.image_position_help' => 'Selecteer de positie van de afbeelding in relatie met de tekst.',
        'form_component.image_width_lbl' => 'Breedte van de afbeelding',
        'form_component.background_colour_lbl' => 'Achtergrondkleur',
        'form_component.block_style_lbl' => 'Blokstijl',
        'form_component.block_style_help' => 'Dit zal het blok tonen in een andere stijl.',
        'form_component.copy_content_blocks_to_other_locales_lbl' => 'Kopieer inhoudsblokken naar andere talen',
        'form_component.copy_content_blocks_to_other_locales.error_resource_not_translatable' => 'De Filament resource is niet vertaalbaar, of deze pagina heeft geen LocaleSwitch actie, zie Filament documentatie.',
        'form_component.copy_content_blocks_to_other_locales.error_model_not_translatable' => 'Het model is niet vertaalbaar.',
        'form_component.copy_content_blocks_to_other_locales.success' => 'De inhoudsblokken zijn gekopieerd naar de andere talen!',
        'form_component.copy_content_blocks_to_other_locales.error' => 'Er was een fout tijdens het kopiëren van de inhoudsblokken: <strong>:error</strong>',
        'form_component.copy_content_blocks_to_other_locales.modal_heading' => 'Kopieer de inhoudsblokken',
        'form_component.copy_content_blocks_to_other_locales.modal_subheading' => 'Dit kopieert alle inhoudsblokken van deze taal naar alle andere talen. Bestaande vertaalde inhoudsblokken zullen verwijderd en overschreven worden! Ben je zeker?',
        'form_component.copy_content_blocks_to_other_locales.modal_button' => 'Kopieer inhoudsblokken',

        'form_component.content_blocks.text.title' => 'Titel',
        'form_component.content_blocks.text.label' => 'Tekst',
        'form_component.content_blocks.text.content' => 'Tekst',
        'form_component.content_blocks.text-image.label' => 'Tekst (+ afbeelding)',
        'form_component.content_blocks.text-image.title' => 'Titel',
        'form_component.content_blocks.text-image.text' => 'Tekst',
        'form_component.content_blocks.text-image.image' => 'Afbeelding',
        'form_component.content_blocks.text-image.image_title' => 'Titel van de afbeelding',
        'form_component.content_blocks.text-image.image_copyright' => 'Auteursrechten van de afbeelding',
        'form_component.content_blocks.text-image.call_to_action' => 'Call to action',
        'form_component.content_blocks.video.label' => 'Video',
        'form_component.content_blocks.video.embed_code' => 'Video embed code',
        'form_component.content_blocks.video.help' => 'Voeg de embed code van de share optie van YouTube of Vimeo toe.',
        'form_component.content_blocks.video.overlay_image' => 'Preview afbeelding',
        'form_component.content_blocks.html.title' => 'HTML',
        'form_component.content_blocks.html.label' => 'HTML',
        'form_component.content_blocks.html.help' => 'Let op dat de ingevoerde HTML geen kwaadaardige scripts of styles bevat die de pagina kunnen stuk maken.',
        'form_component.content_blocks.quote.label' => 'Citaat',
        'form_component.content_blocks.quote.quote' => 'Citaat',
        'form_component.content_blocks.quote.author' => 'Auteur',
        'form_component.content_blocks.image.label' => 'Afbeelding',
        'form_component.content_blocks.image.image' => 'Afbeelding',
        'form_component.content_blocks.image.image_title' => 'Titel van de afbeelding',
        'form_component.content_blocks.image.image_copyright' => 'Auteursrechten van de afbeelding',
        'form_component.content_blocks.overview.label' => 'Overzichtlijst',
        'form_component.content_blocks.overview.title' => 'Titel',
        'form_component.content_blocks.overview.items' => 'Overzicht',
        'form_component.content_blocks.overview.overview_model' => 'Type',
        'form_component.content_blocks.overview.overview_item' => 'Pagina',
        'form_component.content_blocks.call-to-action.label' => 'Call to action',
        'form_component.content_blocks.call-to-action.title' => 'Titel',
        'form_component.content_blocks.call-to-action.text' => 'Tekst',
        'form_component.content_blocks.call-to-action.image' => 'Afbeelding',
        'form_component.content_blocks.call-to-action.image_title' => 'Titel van de afbeelding',
        'form_component.content_blocks.call-to-action.image_copyright' => 'Auteursrechten van de afbeelding',
        'form_component.content_blocks.call-to-action.call_to_action' => 'Call to action',
        'form_component.content_blocks.cards.label' => 'Kaarten',
        'form_component.content_blocks.cards.title' => 'Titel',
        'form_component.content_blocks.cards.grid_columns' => 'Aantal kolommen',
        'form_component.content_blocks.cards.cards' => 'Kaarten',
        'form_component.content_blocks.cards.card_title' => 'Kaarttitel',
        'form_component.content_blocks.cards.card_text' => 'Kaarttekst',
        'form_component.content_blocks.cards.card_image' => 'Kaartafbeelding',
        'form_component.content_blocks.template.label' => 'Template',
        'form_component.content_blocks.template.template' => 'Template',

        'form_component.content_blocks.image_position.left' => 'Links',
        'form_component.content_blocks.image_position.center' => 'Midden',
        'form_component.content_blocks.image_position.right' => 'Rechts',

        'form_component.content_blocks.image_width.100%' => 'Volledig',
        'form_component.content_blocks.image_width.75%' => '3/4',
        'form_component.content_blocks.image_width.50%' => '1/2',
        'form_component.content_blocks.image_width.33%' => '1/3',
        'form_component.content_blocks.image_width.25%' => '1/4',

        'form_component.content_blocks.call_to_action_btn.primary' => 'Primair',
        'form_component.content_blocks.call_to_action_btn.primary_chevron' => 'Primair >',
        'form_component.content_blocks.call_to_action_btn.secondary' => 'Secundair',
        'form_component.content_blocks.call_to_action_btn.secondary_chevron' => 'Secundair >',
        'form_component.content_blocks.call_to_action_btn.ghost' => 'Transparant',
        'form_component.content_blocks.call_to_action_btn.ghost_chevron' => 'Transparant >',
        'form_component.content_blocks.call_to_action_btn.link' => 'Link',
        'form_component.content_blocks.call_to_action_btn.link_chevron' => 'Link >',

        'form_component.content_blocks.call_to_action_lbl' => 'Call to action',
        'form_component.content_blocks.add_call_to_action' => 'Voeg call to action toe',
        'form_component.content_blocks.call_to_action_model_type_url' => 'URL',
        'form_component.content_blocks.call_to_action_cta_model' => 'Type',
        'form_component.content_blocks.call_to_action_entry_id' => 'Pagina',
        'form_component.content_blocks.call_to_action_button_style' => 'Stijl van de knop',
        'form_component.content_blocks.call_to_action_button_label' => 'Label op de knop',
        'form_component.content_blocks.call_to_action_button_open_in_new_window' => 'Open in nieuw venster?',

        'form_component.content_blocks.background_colour.default' => 'Standaard',
        'form_component.content_blocks.background_colour.primary' => 'Primair',
        'form_component.content_blocks.background_colour.secondary' => 'Secundair',
        'form_component.content_blocks.background_colour.grey' => 'Grijs',

        'form_component.content_blocks.block_styles.default' => 'Standaard',

        'form_component.grid_columns_lbl' => 'Aantal kolommen',

        'form_component.image_conversion_type_lbl' => 'Omzetting van de afbeelding',
        'form_component.image_conversion_type_crop' => 'Bijsnijden',
        'form_component.image_conversion_type_contain' => 'Aspect ratio behouden',

        'form_component.content_blocks.templates_options.footer' => 'Voettekst',
    ];
