<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a style="margin-left: 0.5em;" href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>Auth bypass in index.php (oC-SA-2012-015)</h2>
        <p>10th July 2012</p>
        <p>Risk level: <strong>High</strong></p>
        
        
        <h3>Description</h3>
        <p><p>index.php before ownCloud 4.0.7 does not properly validate the oc_token cookie, which allows remote attackers to bypass authentication via a crafted oc_token cookie value.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>4.0.7</strong> (CVE-2012-4392)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>It is recommended that all instances are upgraded to ownCloud Server 4.0.7.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Julien Cayssol - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>