<footer class="usa-footer usa-footer-medium" role="contentinfo">
  <div class="usa-grid usa-footer-return-to-top">
    <a href="#">Return to top</a>
  </div>
  <div class="usa-footer-primary-section">
    <div class="usa-grid-full">
      @php(dynamic_sidebar('sidebar-footer'))
      <form accept-charset="UTF-8" action="https://search.usa.gov/search" id="search_form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>

        <input id="affiliate" name="affiliate" type="hidden" value="nasa-glenn" />
        <label for="query">Enter Search Term(s):</label>
        <input autocomplete="off" class="usagov-search-autocomplete" id="query" name="query" type="text" />
        <input name="commit" type="submit" value="Search" />
      </form>
    </div>
  </div>
</footer>
<script type="text/javascript">
//<![CDATA[
      var usasearch_config = { siteHandle:"nasa-glenn" };

      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "//search.usa.gov/javascripts/remote.loader.js";
      document.getElementsByTagName("head")[0].appendChild(script);

//]]>
</script>
