Google Tag Manager & AMP

In Google Tag manager..

1. Create a new tag for the Google Analytics acount that will be used.

2. Add a Trigger and use Page View for type.

3. Create new AMP variables that link to Wordpress dimensions (author, postid, tags,etc). Create new AMP variable and make sure the actual variable names starts with "dimension1" (this connects it to the custom dimension created in the GA account).

4. Go back to "Tags" and select your GA account. Create Custom Dimensions starting with numeral 1 as the index and then connecting it to the variales you setup before. Trigger All Pages.

5. In your AMP file make sure the markup looks something like this.

<!-- This file contains the variables used in the AMP code -->
<?php include get_template_directory() . '/custom-dim.php'; ?>

<!-- AMP Analytics -->
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

<!-- Google Tag Manager -->
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-PV6QMG5&gtm.url=SOURCE_URL" data-credentials="include">

    <script type="application/json">
        {
            "vars": {
                "gtag_id": "UA-XXXXXX-X",
                "config": {
                    "UA-XXXXXX-X": {
                        "groups": "default"
                    }
                },
                "dimension1": "<?=$gaAuthor?>",
                "dimension2": "<?=$gaTags?>",
                "dimension6": "<?=$gaDate?>",
                "dimension7": "<?=$gaModDate?>",
                "dimension8": "<?=$gaPostId?>",
                "dimension9": "<?=$gaCat?>"
            },
            "triggers": {
                "trackPageview": {
                    "on": "visible",
                    "request": "pageview"
                }
            }
        }
    </script>

</amp-analytics>