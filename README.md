# Graph::Easy on DreamHost

[Graph::Easy](https://metacpan.org/pod/Graph::Easy) as a service, written in Perl, to run on my DreamHost shared host.

## Setup

Setup involves following the instructions to [set up CPAN on DreamHost](https://help.dreamhost.com/hc/en-us/articles/217716877-CPAN).

Start by running:

```
mkdir ~/perl5/man
mkdir ~/perl5/man/man1
mkdir ~/perl5/man/man3
cpan
```

Accept the defaults, and then execute the following inside the CPAN shell:

```
o conf makepl_arg "install_base=/home/unindented/perl5 \
LIB=/home/unindented/perl5/lib \
INSTALLMAN1DIR=/home/unindented/perl5/man/man1 \
INSTALLMAN3DIR=/home/unindented/perl5/man/man3"
o conf commit
exit
```

Open CPAN again, and install `Graph::Easy`:

```
cpan
install Graph::Easy
```

## Test

You can test that everything is working by doing something like this:

```
curl -H 'Content-Type: text/plain' -d '[ A ] --> [ B ]' https://graph.unindented.org/
```

## Meta

- Code: `git clone https://github.com/unindented/dreamhost-graph-easy.git`
- Home: <https://unindented.org/>

## Contributors

Daniel Perez Alvarez ([unindented@gmail.com](mailto:unindented@gmail.com))

## License

Copyright (c) 2021 Daniel Perez Alvarez ([unindented.org](https://unindented.org/)). This is free software, and may be redistributed under the terms specified in the LICENSE file.
