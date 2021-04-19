#!/usr/bin/perl

use strict;
use warnings;

use lib qw(/home/unindented/perl5/lib/perl5);

use Graph::Easy::Parser;
use CGI::Fast qw(:standard);

my $parser = Graph::Easy::Parser->new();

while (my $cgi = CGI::Fast->new()) {
  my $body = $cgi->param('POSTDATA');
  my $graph = $parser->from_text($body);

  print $cgi->header(-type => 'text/plain', -charset => 'utf-8'),
        $graph->as_ascii();
}
