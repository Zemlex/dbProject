###########################################################################
#
# This file is auto-generated by the Perl DateTime Suite locale
# generator (0.05).  This code generator comes with the
# DateTime::Locale distribution in the tools/ directory, and is called
# generate-from-cldr.
#
# This file as generated from the CLDR XML locale data.  See the
# LICENSE.cldr file included in this distribution for license details.
#
# This file was generated from the source file ga_IE.xml
# The source file version number was 1.49, generated on
# 2009/05/05 23:06:36.
#
# Do not edit this file directly.
#
###########################################################################

package DateTime::Locale::ga_IE;

use strict;
use warnings;
use utf8;

use base 'DateTime::Locale::ga';

sub cldr_version { return "1\.7\.1" }

{
    my $first_day_of_week = "7";
    sub first_day_of_week { return $first_day_of_week }
}

{
    my $glibc_date_format = "\%d\.\%m\.\%y";
    sub glibc_date_format { return $glibc_date_format }
}

{
    my $glibc_date_1_format = "\%a\ \%b\ \%e\ \%H\:\%M\:\%S\ \%Z\ \%Y";
    sub glibc_date_1_format { return $glibc_date_1_format }
}

{
    my $glibc_datetime_format = "\%a\ \%d\ \%b\ \%Y\ \%T\ \%Z";
    sub glibc_datetime_format { return $glibc_datetime_format }
}

{
    my $glibc_time_format = "\%T";
    sub glibc_time_format { return $glibc_time_format }
}

1;

__END__


=pod

=encoding utf8

=head1 NAME

DateTime::Locale::ga_IE

=head1 SYNOPSIS

  use DateTime;

  my $dt = DateTime->now( locale => 'ga_IE' );
  print $dt->month_name();

=head1 DESCRIPTION

This is the DateTime locale package for Irish Ireland.

=head1 DATA

This locale inherits from the L<DateTime::Locale::ga> locale.

It contains the following data.

=head2 Days

=head3 Wide (format)

  Dé Luain
  Dé Máirt
  Dé Céadaoin
  Déardaoin
  Dé hAoine
  Dé Sathairn
  Dé Domhnaigh

=head3 Abbreviated (format)

  Luan
  Máirt
  Céad
  Déar
  Aoine
  Sath
  Domh

=head3 Narrow (format)

  L
  M
  C
  D
  A
  S
  D

=head3 Wide (stand-alone)

  Dé Luain
  Dé Máirt
  Dé Céadaoin
  Déardaoin
  Dé hAoine
  Dé Sathairn
  Dé Domhnaigh

=head3 Abbreviated (stand-alone)

  Luan
  Máirt
  Céad
  Déar
  Aoine
  Sath
  Domh

=head3 Narrow (stand-alone)

  L
  M
  C
  D
  A
  S
  D

=head2 Months

=head3 Wide (format)

  Eanáir
  Feabhra
  Márta
  Aibreán
  Bealtaine
  Meitheamh
  Iúil
  Lúnasa
  Meán Fómhair
  Deireadh Fómhair
  Samhain
  Nollaig

=head3 Abbreviated (format)

  Ean
  Feabh
  Márta
  Aib
  Beal
  Meith
  Iúil
  Lún
  MFómh
  DFómh
  Samh
  Noll

=head3 Narrow (format)

  E
  F
  M
  A
  B
  M
  I
  L
  M
  D
  S
  N

=head3 Wide (stand-alone)

  Eanáir
  Feabhra
  Márta
  Aibreán
  Bealtaine
  Meitheamh
  Iúil
  Lúnasa
  Meán Fómhair
  Deireadh Fómhair
  Samhain
  Nollaig

=head3 Abbreviated (stand-alone)

  Ean
  Feabh
  Márta
  Aib
  Beal
  Meith
  Iúil
  Lún
  MFómh
  DFómh
  Samh
  Noll

=head3 Narrow (stand-alone)

  E
  F
  M
  A
  B
  M
  I
  L
  M
  D
  S
  N

=head2 Quarters

=head3 Wide (format)

  1ú ráithe
  2ú ráithe
  3ú ráithe
  4ú ráithe

=head3 Abbreviated (format)

  R1
  R2
  R3
  R4

=head3 Narrow (format)

  1
  2
  3
  4

=head3 Wide (stand-alone)

  1ú ráithe
  2ú ráithe
  3ú ráithe
  4ú ráithe

=head3 Abbreviated (stand-alone)

  R1
  R2
  R3
  R4

=head3 Narrow (stand-alone)

  1
  2
  3
  4

=head2 Eras

=head3 Wide

  Roimh Chríost
  Anno Domini

=head3 Abbreviated

  RC
  AD

=head3 Narrow

  RC
  AD

=head2 Date Formats

=head3 Full

   2008-02-05T18:30:30 = Dé Máirt 5 Feabhra 2008
   1995-12-22T09:05:02 = Dé hAoine 22 Nollaig 1995
  -0010-09-15T04:44:23 = Dé Sathairn 15 Meán Fómhair -10

=head3 Long

   2008-02-05T18:30:30 = 5 Feabhra 2008
   1995-12-22T09:05:02 = 22 Nollaig 1995
  -0010-09-15T04:44:23 = 15 Meán Fómhair -10

=head3 Medium

   2008-02-05T18:30:30 = 5 Feabh 2008
   1995-12-22T09:05:02 = 22 Noll 1995
  -0010-09-15T04:44:23 = 15 MFómh -10

=head3 Short

   2008-02-05T18:30:30 = 05/02/2008
   1995-12-22T09:05:02 = 22/12/1995
  -0010-09-15T04:44:23 = 15/09/-010

=head3 Default

   2008-02-05T18:30:30 = 5 Feabh 2008
   1995-12-22T09:05:02 = 22 Noll 1995
  -0010-09-15T04:44:23 = 15 MFómh -10

=head2 Time Formats

=head3 Full

   2008-02-05T18:30:30 = 18:30:30 UTC
   1995-12-22T09:05:02 = 09:05:02 UTC
  -0010-09-15T04:44:23 = 04:44:23 UTC

=head3 Long

   2008-02-05T18:30:30 = 18:30:30 UTC
   1995-12-22T09:05:02 = 09:05:02 UTC
  -0010-09-15T04:44:23 = 04:44:23 UTC

=head3 Medium

   2008-02-05T18:30:30 = 18:30:30
   1995-12-22T09:05:02 = 09:05:02
  -0010-09-15T04:44:23 = 04:44:23

=head3 Short

   2008-02-05T18:30:30 = 18:30
   1995-12-22T09:05:02 = 09:05
  -0010-09-15T04:44:23 = 04:44

=head3 Default

   2008-02-05T18:30:30 = 18:30:30
   1995-12-22T09:05:02 = 09:05:02
  -0010-09-15T04:44:23 = 04:44:23

=head2 Datetime Formats

=head3 Full

   2008-02-05T18:30:30 = Dé Máirt 5 Feabhra 2008 18:30:30 UTC
   1995-12-22T09:05:02 = Dé hAoine 22 Nollaig 1995 09:05:02 UTC
  -0010-09-15T04:44:23 = Dé Sathairn 15 Meán Fómhair -10 04:44:23 UTC

=head3 Long

   2008-02-05T18:30:30 = 5 Feabhra 2008 18:30:30 UTC
   1995-12-22T09:05:02 = 22 Nollaig 1995 09:05:02 UTC
  -0010-09-15T04:44:23 = 15 Meán Fómhair -10 04:44:23 UTC

=head3 Medium

   2008-02-05T18:30:30 = 5 Feabh 2008 18:30:30
   1995-12-22T09:05:02 = 22 Noll 1995 09:05:02
  -0010-09-15T04:44:23 = 15 MFómh -10 04:44:23

=head3 Short

   2008-02-05T18:30:30 = 05/02/2008 18:30
   1995-12-22T09:05:02 = 22/12/1995 09:05
  -0010-09-15T04:44:23 = 15/09/-010 04:44

=head3 Default

   2008-02-05T18:30:30 = 5 Feabh 2008 18:30:30
   1995-12-22T09:05:02 = 22 Noll 1995 09:05:02
  -0010-09-15T04:44:23 = 15 MFómh -10 04:44:23

=head2 Available Formats

=head3 d (d)

   2008-02-05T18:30:30 = 5
   1995-12-22T09:05:02 = 22
  -0010-09-15T04:44:23 = 15

=head3 EEEd (d EEE)

   2008-02-05T18:30:30 = 5 Máirt
   1995-12-22T09:05:02 = 22 Aoine
  -0010-09-15T04:44:23 = 15 Sath

=head3 HHmm (HH:mm)

   2008-02-05T18:30:30 = 18:30
   1995-12-22T09:05:02 = 09:05
  -0010-09-15T04:44:23 = 04:44

=head3 HHmmss (HH:mm:ss)

   2008-02-05T18:30:30 = 18:30:30
   1995-12-22T09:05:02 = 09:05:02
  -0010-09-15T04:44:23 = 04:44:23

=head3 Hm (H:mm)

   2008-02-05T18:30:30 = 18:30
   1995-12-22T09:05:02 = 9:05
  -0010-09-15T04:44:23 = 4:44

=head3 hm (h:mm a)

   2008-02-05T18:30:30 = 6:30 p.m.
   1995-12-22T09:05:02 = 9:05 a.m.
  -0010-09-15T04:44:23 = 4:44 a.m.

=head3 Hms (H:mm:ss)

   2008-02-05T18:30:30 = 18:30:30
   1995-12-22T09:05:02 = 9:05:02
  -0010-09-15T04:44:23 = 4:44:23

=head3 hms (h:mm:ss a)

   2008-02-05T18:30:30 = 6:30:30 p.m.
   1995-12-22T09:05:02 = 9:05:02 a.m.
  -0010-09-15T04:44:23 = 4:44:23 a.m.

=head3 M (L)

   2008-02-05T18:30:30 = 2
   1995-12-22T09:05:02 = 12
  -0010-09-15T04:44:23 = 9

=head3 Md (d/M)

   2008-02-05T18:30:30 = 5/2
   1995-12-22T09:05:02 = 22/12
  -0010-09-15T04:44:23 = 15/9

=head3 MEd (E, M-d)

   2008-02-05T18:30:30 = Máirt, 2-5
   1995-12-22T09:05:02 = Aoine, 12-22
  -0010-09-15T04:44:23 = Sath, 9-15

=head3 MMdd (dd/MM)

   2008-02-05T18:30:30 = 05/02
   1995-12-22T09:05:02 = 22/12
  -0010-09-15T04:44:23 = 15/09

=head3 MMM (LLL)

   2008-02-05T18:30:30 = Feabh
   1995-12-22T09:05:02 = Noll
  -0010-09-15T04:44:23 = MFómh

=head3 MMMd (MMM d)

   2008-02-05T18:30:30 = Feabh 5
   1995-12-22T09:05:02 = Noll 22
  -0010-09-15T04:44:23 = MFómh 15

=head3 MMMEd (E MMM d)

   2008-02-05T18:30:30 = Máirt Feabh 5
   1995-12-22T09:05:02 = Aoine Noll 22
  -0010-09-15T04:44:23 = Sath MFómh 15

=head3 MMMMd (d MMMM)

   2008-02-05T18:30:30 = 5 Feabhra
   1995-12-22T09:05:02 = 22 Nollaig
  -0010-09-15T04:44:23 = 15 Meán Fómhair

=head3 MMMMEd (E MMMM d)

   2008-02-05T18:30:30 = Máirt Feabhra 5
   1995-12-22T09:05:02 = Aoine Nollaig 22
  -0010-09-15T04:44:23 = Sath Meán Fómhair 15

=head3 mmss (mm:ss)

   2008-02-05T18:30:30 = 30:30
   1995-12-22T09:05:02 = 05:02
  -0010-09-15T04:44:23 = 44:23

=head3 ms (mm:ss)

   2008-02-05T18:30:30 = 30:30
   1995-12-22T09:05:02 = 05:02
  -0010-09-15T04:44:23 = 44:23

=head3 y (y)

   2008-02-05T18:30:30 = 2008
   1995-12-22T09:05:02 = 1995
  -0010-09-15T04:44:23 = -10

=head3 yM (y-M)

   2008-02-05T18:30:30 = 2008-2
   1995-12-22T09:05:02 = 1995-12
  -0010-09-15T04:44:23 = -10-9

=head3 yMEd (EEE, y-M-d)

   2008-02-05T18:30:30 = Máirt, 2008-2-5
   1995-12-22T09:05:02 = Aoine, 1995-12-22
  -0010-09-15T04:44:23 = Sath, -10-9-15

=head3 yMMM (y MMM)

   2008-02-05T18:30:30 = 2008 Feabh
   1995-12-22T09:05:02 = 1995 Noll
  -0010-09-15T04:44:23 = -10 MFómh

=head3 yMMMEd (EEE, y MMM d)

   2008-02-05T18:30:30 = Máirt, 2008 Feabh 5
   1995-12-22T09:05:02 = Aoine, 1995 Noll 22
  -0010-09-15T04:44:23 = Sath, -10 MFómh 15

=head3 yMMMM (y MMMM)

   2008-02-05T18:30:30 = 2008 Feabhra
   1995-12-22T09:05:02 = 1995 Nollaig
  -0010-09-15T04:44:23 = -10 Meán Fómhair

=head3 yQ (y Q)

   2008-02-05T18:30:30 = 2008 1
   1995-12-22T09:05:02 = 1995 4
  -0010-09-15T04:44:23 = -10 3

=head3 yQQQ (y QQQ)

   2008-02-05T18:30:30 = 2008 R1
   1995-12-22T09:05:02 = 1995 R4
  -0010-09-15T04:44:23 = -10 R3

=head3 yyMM (MM/yy)

   2008-02-05T18:30:30 = 02/08
   1995-12-22T09:05:02 = 12/95
  -0010-09-15T04:44:23 = 09/-10

=head3 yyMMM (MMM yy)

   2008-02-05T18:30:30 = Feabh 08
   1995-12-22T09:05:02 = Noll 95
  -0010-09-15T04:44:23 = MFómh -10

=head3 yyQ (Q yy)

   2008-02-05T18:30:30 = 1 08
   1995-12-22T09:05:02 = 4 95
  -0010-09-15T04:44:23 = 3 -10

=head3 yyyyMM (MM/yyyy)

   2008-02-05T18:30:30 = 02/2008
   1995-12-22T09:05:02 = 12/1995
  -0010-09-15T04:44:23 = 09/-010

=head3 yyyyMMMM (MMMM y)

   2008-02-05T18:30:30 = Feabhra 2008
   1995-12-22T09:05:02 = Nollaig 1995
  -0010-09-15T04:44:23 = Meán Fómhair -10

=head2 Miscellaneous

=head3 Prefers 24 hour time?

Yes

=head3 Local first day of the week

Dé Domhnaigh


=head1 SUPPORT

See L<DateTime::Locale>.

=head1 AUTHOR

Dave Rolsky <autarch@urth.org>

=head1 COPYRIGHT

Copyright (c) 2008 David Rolsky. All rights reserved. This program is
free software; you can redistribute it and/or modify it under the same
terms as Perl itself.

This module was generated from data provided by the CLDR project, see
the LICENSE.cldr in this distribution for details on the CLDR data's
license.

=cut
