# Parkakademie

![screenshot](https://github.com/IamMM/parkakademie/blob/master/themes/Parkakademie/screenshot.jpg "Screenshot")

## This theme is dependent on following frameworks

- Bootstrap 4.0.0
- Swiper 4.5.0 

## This Theme is dependent on following plugins:

- advanced custom fields PRO
- TB Search Menu
- event-list

## Important Information

Do not update Event-List Plugin
Changes where made to show correct permalink for single events
See: [Forum](https://wordpress.org/support/topic/shortcode-permalink-not-working/)

> WP Version: 4.9.6
> Events List Version: 0.8.3
> 
> Problem: Shortcode [events-list] permalink wasn’t rendering correctly:
> returning: {current_psot_url}/?event_id1={event_id}
> Solution:
> Modified (event-list/includes/sc_event-list.php Line 447
> Changed From: return esc_html(add_query_arg(‘event_id’.$a[‘sc_id_for_url’], event_id, $this->get_url($a)));
> Changed To: return get_permalink($event_id);