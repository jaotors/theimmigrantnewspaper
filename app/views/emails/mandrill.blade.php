{
    "key": <?php echo $apikey?>,
    "message": {
        "html": <?php print $htmlcontent ?>,
        "subject": <?php echo $subject?>,
        "from_email": <?php echo $frommail?>,
        "from_name": <?php echo $fromname?>,
        "to": <?php echo $recipient ?>,
        "headers": {
            "Reply-To": "noreply@theimmigrant.com.ph"
        },
        "important": false,
        "track_opens": true,
        "track_clicks": true,
        "auto_text": null,
        "auto_html": null,
        "inline_css": null,
        "url_strip_qs": null,
        "preserve_recipients": false,
        "bcc_address": "",
        "tracking_domain": null,
        "signing_domain": null,
        "merge": true,
        "global_merge_vars": [],
        "merge_vars": [],
        "tags": [
            <?php echo $tags ?>
        ],
        "google_analytics_domains": [],
        "google_analytics_campaign": "",
        "metadata": {
            "website": "http://www.theimmigrantnewspaper.com/"
        },
        "recipient_metadata": [],
        "attachments": []
    },
    "async": false
}